<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashCraft</title>
    <link rel="stylesheet" href="{{ asset('css/weather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <h1>Welcome to DashCraft</h1>
    <h2>My widgets</h2>
    <livewire:weather-widget/>
    <livewire:news-widget/>
    <livewire:wordpress-widget/>
</body>
</html>