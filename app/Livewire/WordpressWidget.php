<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WordpressWidget extends Component
{


    public $data = null;
    public $plugin = null;
    public $error = null;
    public $ratingKeys = [];
    public $ratingValues = [];

    public function fetchWordpressAPI()
    {
        try {
            $response = Http::get("https://api.wordpress.org/plugins/info/1.2/?action=plugin_information&slug={$this->plugin}");

            if ($response->successful()) {
                $this->data = $response->json();

                if (isset($this->data['ratings'])) {
                    $this->ratingValues = array_values($this->data['ratings']);
                    $this->dispatch('updateCharts', ['values' => $this->ratingValues]);
                } else {
                    $this->ratingKeys = [];
                    $this->ratingValues = [];
                }
            }
        } catch (\Exception $e) {
            $this->error = "API request failed: " . $e->getMessage();
            $this->data = null;
            $this->ratingKeys = [];
            $this->ratingValues = [];
        }
    }

    public function render()
    {
        return view('livewire.wordpress-widget');
    }
}
