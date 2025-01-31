<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CovidWidget extends Component
{

    public $country = '';
    public $covidData = [];


    public function searchCountry()
    {
        if (!empty($this->country)) {
            $response = Http::get("https://disease.sh/v3/covid-19/countries/{$this->country}");

            if ($response->successful()) {
                $this->covidData = $response->json();
                $this->dispatch('updateData', ['covidData' => $this->covidData]);
            } else {
                $this->covidData = [];
            }
        }
    }

    public function render()
    {
        return view('livewire.covid-widget');
    }
}
