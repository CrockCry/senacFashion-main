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
            <div class="ml-auto d-flex align-items-center">
                <span class="navbar-text mr-3">
                    Usuário: usuario<!-- Exemplo de como pegar o nome do usuário autenticado -->
                </span>
                <form action="{{ route('home') }}" class="form-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Sair</button>
                </form>
            </div>
        </nav>

        @yield('content')
    </div>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>
