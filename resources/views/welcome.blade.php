<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashCraft</title>
    <link rel="stylesheet" href="{{ asset('css/weather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/spotify.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body style="background-color: #e4f9f9">
    <img class="doodle-1" src="{{ asset('images/doodle-1.svg') }}" alt="My Image">
    <img class="doodle-2" src="{{ asset('images/doodle-2.svg') }}" alt="My Image">

    <div class="header flex center column">
        <img class="doodle-3" src="{{ asset('images/doodle-1.svg') }}" alt="My Image">
        <img class="doodle-4" src="{{ asset('images/doodle-4.svg') }}" alt="My Image">    
        <img class="stars" src="{{ asset('images/stars.svg') }}" alt="My Image">    
        <img class="sun" src="{{ asset('images/sun.svg') }}" alt="My Image">    
        <h1>Welcome to</h1>
        <div>
            <h1>Dash<span>Craft</span></h1>
        </div>
    </div>
    
    <livewire:weather-widget/>
    <livewire:news-widget/>
    <livewire:wordpress-widget/>
    <livewire:spotify-widget/>
    <livewire:covid-widget/>
</body>
</html>