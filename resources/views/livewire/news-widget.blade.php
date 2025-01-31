<div>
    <div class="weather-container">
        <h2 class="title">News Widget</h2>
        <select wire:model="news" wire:change="showNews" class="city-select">
            <option value="">Select news</option>
            <option value="us">US</option>
            <option value="tesla">Tesla</option>
            <option value="apple">Apple</option>
        </select>
    </div>


    @if ($error)
        <div class="alert">{{ $error }}</div>
    @endif


    @if ($data)
        <div class="news-container">
            @for ($i = 0; $i < 3; $i++) 
                <div class="news-card">
                    <img src="{{ $articles[$i]['urlToImage'] }}" alt="News Image" class="news-image">
                    <div class="news-content">
                        <h3 class="news-title">{{ $articles[$i]['title'] }}</h3>
                        <p class="news-source"><strong>Source:</strong> {{ $articles[$i]['source']['name'] }}</p>
                        <p class="news-author"><strong>Author:</strong> {{ $articles[$i]['author'] }}</p>
                        <p class="news-description">{{ $articles[$i]['description'] }}</p>
                        <a href="{{ $articles[$i]['url'] }}" target="_blank" class="news-link">Read More</a>
                    </div>
                </div>  
            @endfor
        </div>
    @endif

</div>
