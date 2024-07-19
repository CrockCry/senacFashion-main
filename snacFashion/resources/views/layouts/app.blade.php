<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <a href="{{ route('dashboard.index') }}">Home</a>
        <a href="{{ route('dashboard.news') }}">News</a>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
