<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class NewsWidget extends Component
{

    public $data = null;
    public $error = null;
    public $articles = null;
    public $news = null;

    public function showNews()
    {
        if (!$this->news) {
            $this->data = null;
            return;
        }

        try {

            if ($this->news === "us") {
                $response = Http::get("https://newsapi.org/v2/top-headlines", [
                    'country' => $this->news,
                    'category' => 'business',
                    'apiKey' => env('NEWS_API_KEY')
                ]);
            } else {
                $response = Http::get("https://newsapi.org/v2/everything", [
                    'q' => $this->news,
                    'from' => '2025-01-29',
                    'to' => '2025-01-30',
                    'sortBy' => 'popularity',
                    'apiKey' => env('NEWS_API_KEY')
                ]);
            }
            if ($response->successful()) {
                $this->data = $response->json();
                $this->articles = $response->json()['articles'];
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
        return view('livewire.news-widget');
    }
}
