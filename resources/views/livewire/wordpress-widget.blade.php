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

    @if ($error)
        <div class="alert">{{ $error }}</div>
    @endif


    <div>
        <canvas id="myChart"></canvas>
    </div>

    @if ($data)
        @assets
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @endassets

        @script
            <script> 
                document.addEventListener('DOMContentLoaded', function () {
                    Livewire.on('updateCharts', data => {

                    });
                });

                let chart = null;
                function updateCharts(values) {
                    
                if (chart) {
                        chart.destroy();
                    }
                    const c = document.getElementById('myChart');

                    chart = new Chart(c, {
                        type: 'bar',
                        data: {
                            labels:[5,4,3,2,1],
                            datasets: [{
                                label: '# of Votes',
                                data: values,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
                    updateCharts(values = []);

                window.addEventListener('updateCharts', (event) => {    
                    updateCharts(event.detail[0].values);
                });
            </script>
        @endscript
    @endif
</div>

