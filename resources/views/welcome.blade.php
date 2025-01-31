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
<body style="background-color: #FAFCFC">
    <h1 style="color:#011016; text-align:center">Welcome to DashCraft</h1>
    <h2 style="color:#011016; text-align:center">My widgets</h2>
    <livewire:weather-widget/>
    <livewire:news-widget/>
    <livewire:wordpress-widget/>
    <livewire:spotify-widget/>
    <livewire:covid-widget/>
</body>
</html>