<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class WeatherWidget extends Component
{

    public $data = null;
    public $error = null;
    public $location = null;


    public function showWeather()
    {
        if (!$this->location) {
            $this->data = null;
            return;
        }

        try {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                'q' => $this->location,
                'appid' => env('OPENWEATHERMAP_API_KEY')
            ]);
            if ($response->successful()) {
                $this->data = $response->json();
                $this->error = null;
            } else {
                $this->error = 'Failed to fetch data. Please try again.';
                $this->data = null;
            }
        } catch (\Exception $e) {
            $this->error = "API request failed: " . $e->getMessage();
            $this->data = null;
        }
    }

    public function render()
    {
        return view('livewire.weather-widget');
    }
}
