<div>

    <div class="weather-container">
        
        <h1>Spotify Widget</h1>
        <input class="city-select" type="text" wire:model="query" placeholder="Search Spotify">
        <button class="city-select" wire:click="spotifySearch">Search</button>
    </div>

    @if(session()->has('error'))
        <p class="text-red-500">{{ session('error') }}</p>
    @endif

    <ul>
        @foreach($results as $track)
            <li>
                <strong>{{ $track['name'] }}</strong> by {{ $track['artists'][0]['name'] }}
                <br>
                <p>{{ $track['preview_url'] }}</p>
                <a href={{ $track['external_urls']['spotify'] }} target="_blank" rel="noopener noreferrer">Go</a>
                <img src={{$track['album']['images'][0]['url']}} alt="">
                <audio controls>
                    <source src="{{ $track['preview_url'] }}" type="audio/mpeg">
                </audio>
            </li>
        @endforeach
    </ul>
</div>
