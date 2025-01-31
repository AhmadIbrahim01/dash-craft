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
</div>
