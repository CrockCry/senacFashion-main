<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilista</title>
    <link rel="stylesheet" href="{{ asset('assets/css/estilista.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ssf8bhz.css">
    <link rel="stylesheet" href="https://use.typekit.net/peg6efo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Cabeçalho -->
    <header id="main-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo4.png') }}"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('desfile') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('estilista') }}">Estilistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.sp.senac.br/busca?q=moda#c">SENAC</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Seção Sobre o Estilista -->
    <section id="sobre-estilista" class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/artista.png') }}" class="img-fluid" alt="Estilista">
            </div>
            <div class="col-md-6 estilista-text">
                <h2>Nome do Estilista</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ligula eu erat accumsan cursus. Nullam vitae felis at justo accumsan porta.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ligula eu erat accumsan cursus. Nullam vitae felis at justo accumsan porta.</p>
            </div>
        </div>
    </section>

    <!-- Galeria de Figurinos -->
    <section id="galeria-figurinos" class="galeria-figurinos">
        <div class="container">
            <h2>Figurinos</h2>
            <div class="row galeria-fotos">
                <!-- Fotos de teste -->
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig3.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig4.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig5.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig3.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig4.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig5.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="foto-container">
                        <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                        <div class="info-card">
                            <p>Estilista: Nome Estilista</p>
                            <p>Modelo: Nome Modelo</p>
                        </div>
                    </div>
                </div>
            </div>
            <button id="ver-mais-btn" class="ver-mais-btn">Ver mais</button>
        </div>
    </section>

    <!-- Rodapé -->
<!-- Rodapé -->
<footer class="footer">
    <div class="footer-container">
        <!-- Rotas -->
        <div class="footer-column">
            <h3>Rotas</h3>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Desfile</a></li>
                <li><a href="#">Estilistas</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>
        <!-- Contato -->
        <div class="footer-column">
            <h3>Contato</h3>
            <p>Telefone: (11) 1234-5678</p>
            <p>Email: contato@exemplo.com</p>
            <p>Endereço: Rua Exemplo, 123, São Paulo, SP</p>
        </div>
        <!-- Mapa -->
        <div class="footer-column">
            <h3>Localização</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d888.7149743827646!2d-46.431801569948426!3d-23.495601141859165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1719259055913!5m2!1spt-BR!2sbr"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</footer>


    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
