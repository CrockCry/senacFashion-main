<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="sidebar">
        <a href="{{ route('dashboard.index') }}">Home</a>
        <a href="{{ route('dashboard.news') }}">News</a>
    </div>

    <div class="content">
        <!-- Barra superior com informações do usuário -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="{{ asset('assets/img/logo4.png') }}" alt="Logo" style="width:4%">
            <div class="ml-auto">
                <span class="navbar-text">
                    Usuário: nome <!-- Exemplo de como pegar o nome do usuário autenticado -->
                </span>
            </div>
        </nav>

        @yield('content')
    </div>
</body>

</html>
