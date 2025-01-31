<div>
    <div class="weather-container">
        <h2 class="title">Weather App</h2>
        <select wire:model="location" wire:change="fetchFromApi" class="city-select">
            <option value="">Select a city</option>
            <option value="London">London</option>
            <option value="Paris">Paris</option>
            <option value="Los Angeles">Los Angeles</option>
        </select>
    </div>


    @if ($error)
        <div class="alert">{{ $error }}</div>
    @endif
</div>
