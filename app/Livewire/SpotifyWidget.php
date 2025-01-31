<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SpotifyWidget extends Component
{

    public $query;
    public $results = [];

    public function spotifySearch()
    {
        if (!$this->query) {
            return;
        }

        $tokenResponse = Http::asForm()->post('https://accounts.spotify.com/api/token', [
            'grant_type'    => 'client_credentials',
            'client_id'     => env('SPOTIFY_CLIENT_ID'),
            'client_secret' => env('SPOTIFY_CLIENT_SECRET'),
        ]);

        $token = $tokenResponse->json()['access_token'] ?? null;

        if (!$token) {
            session()->flash('error', 'Failed to get Spotify token');
            return;
        }

        $response = Http::withToken($token)->get(env('SPOTIFY_API_URL') . '/search', [
            'q'     => $this->query,
            'type'  => 'track',
            'limit' => 10,
        ]);

        $this->results = $response->json()['tracks']['items'] ?? [];
    }

    public function render()
    {
        return view('livewire.spotify-widget');
    }
}
