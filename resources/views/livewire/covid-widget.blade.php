<div>
    <div class="weather-container">
        <h1>Covid Widget</h1>
        <input class="city-select" type="text" wire:model="country" wire:keydown.enter="searchCountry" placeholder="Enter country name">
        <button class="city-select" wire:click="searchCountry">Search</button>
    </div>


    <canvas class="covidChart" id="covidChart"></canvas>
    
    @if(!empty($covidData))




    @script
    <script> 
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('updateData', data => {
                const values = data[0].values;
                updateData(values)
            });
        });

        let chart = null;
        function updateData(data) {
            
            if (chart) {
                chart.destroy();
            }
            const c = document.getElementById('covidChart');

            chart = new Chart(c, {
                type: 'bar',
                data: {
                    labels:['Cases', 'Recovered', 'Deaths'],
                    datasets: [{
                        label: data.country,
                        data: [data.cases, data.recovered, data.deaths],
                        backgroundColor: ['#007bff', 'green', 'red'],
                        borderColor: ['darkblue', 'darkgreen', 'darkred'],
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

        window.addEventListener('updateData', (event) => {    
            updateData(event.detail[0].covidData);
        });

    </script>
    @endscript
    @endif

</div>
