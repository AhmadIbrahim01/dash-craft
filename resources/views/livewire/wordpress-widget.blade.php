<div>
    <div class="weather-container">
        <h2 class="title">Wordpress Plugin Widget</h2>
        <select wire:model="plugin" wire:change="fetchWordpressAPI" class="city-select">
            <option value="">Select a plugin</option>
            <option value="woocommerce">woocommerce</option>
            <option value="elementor">elementor</option>
            <option value="jetpack">jetpack</option>
        </select>
    </div>
</div>
