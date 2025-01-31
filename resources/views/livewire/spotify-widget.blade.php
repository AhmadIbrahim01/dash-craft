<div>

    <div class="weather-container">
        
        <h1>Spotify Widget</h1>
        <input class="city-select" type="text" wire:model="query" placeholder="Search Spotify">
        <button class="city-select" wire:click="spotifySearch">Search</button>
    </div>

    @if(session()->has('error'))
        <p class="text-red-500">{{ session('error') }}</p>
    @endif

    @if ($results)
        
    
    <div class="news-container custom-scrollbar">
        @foreach($results as $track)
        <div class="news-card spotify-card">
            <div class="flex spotify-info">
                <img class="spotify-img" src={{$track['album']['images'][0]['url']}} alt="">
                <div class="spotify-song">
                        <h1>{{ $track['name'] }}</h1>
                        <strong>{{ $track['name'] }}</strong> by {{ $track['artists'][0]['name'] }}
                </div>
            </div>
            <div class="flex spotify-play">
                <a class="spotify-link" href={{ $track['external_urls']['spotify'] }} target="_blank" rel="noopener noreferrer">Listen in Spotify</a>
                {{-- <div class="audio-container">
                <audio class="spotify-audio" controls>
                    <source src="{{ $track['preview_url'] }}" type="audio/mpeg">
                    </audio>
                </div>   --}}
                </div>  
            </div>  
            @endforeach
        </div>
        @endif
</div>
