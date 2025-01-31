<div>
    <div class="weather-container">
        <h2 class="title">Weather Widget</h2>
        <select wire:model="location" wire:change="showWeather" class="city-select">
            <option value="">Select a city</option>
            <option value="London">London</option>
            <option value="Paris">Paris</option>
            <option value="Los Angeles">Los Angeles</option>
        </select>
    </div>


    @if ($error)
        <div class="alert">{{ $error }}</div>
    @endif

    @if ($data)
    @php
        $sunset = $data['sys']['sunset'];
        $sunrise = $data['sys']['sunrise'];
        $date = $data['dt'];
        
        $formattedSunset = \Carbon\Carbon::createFromTimestamp($sunset)->format('h:i A');
        $formattedSunrise = \Carbon\Carbon::createFromTimestamp($sunrise)->format('h:i A');
        $formattedDate = \Carbon\Carbon::createFromTimestamp($date)->format('d-m-Y');
    @endphp

    <div class="weather-card">
            <h3 class="weather-title">{{ $location }}</h3>
            <p class="date">📅 Date: <span>{{ $formattedDate }}</span></p>
            <p class="sun-time">🌅 Sunrise: <span>{{ $formattedSunrise }}</span></p>
            <p class="sun-time">🌇 Sunset: <span>{{ $formattedSunset }}</span></p>
            <p class="weather-info">🌡 Temperature: <span>{{ round($data['main']['temp'] - 273.15, 1) }}°C</span></p>
            <p class="weather-info">🤔 Feels like: <span>{{ round($data['main']['feels_like'] - 273.15, 1) }}°C</span></p>
            <p class="weather-info">💨 Wind Speed: <span>{{ $data['wind']['speed'] }} m/s</span></p>
            <p class="weather-info">💧 Humidity: <span>{{ $data['main']['humidity'] }}%</span></p>
            <p class="weather-info">👀 Visibility: <span>{{ $data['visibility'] / 1000 }} km</span></p>
    </div>
    @endif
</div>
