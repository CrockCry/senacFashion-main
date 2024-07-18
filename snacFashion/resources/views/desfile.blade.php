<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/desfile.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ssf8bhz.css">
    <link rel="stylesheet" href="https://use.typekit.net/peg6efo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body>
    {{-- cabeçalho --}}
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
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {{-- banner --}}
    @foreach ($desfiles as $desfile)
        <div class="banner">
            <video autoplay muted loop>
                <source src="{{ asset('assets/vid/' . $desfile->banner_desfile) }}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="stylist-overlay"></div>
            <div class="banner-content">
                <h1 data-aos="fade-up" data-aos-duration="1000">{{ $desfile->titulo_desfile }}</h1>
                <p data-aos="zoom-in" data-aos-duration="1500" class="subTitleBanner">{{ $desfile->subtitulo_desfile }}
                </p>
            </div>
            <a class="btn-mais" href="#sobre-desfile">
                <img src="{{ asset('assets/img/arrow.png') }}" alt="Arrow Icon">
            </a>
        </div>

        <section id="sobre-desfile" class="sobre-desfile">
            <div class="sobre-desfile-container">
                <div class="desfile-info">
                    <h2>{{ $desfile->titulo_desfile }}</h2>
                    <p class="desfile-data">Data: {{ \Carbon\Carbon::parse($desfile->data_desfile)->format('d/m/Y') }}
                    </p>
                </div>
                <p class="desfile-descricao">
                    {{ $desfile->sobre_desfile }}
                </p>
            </div>
        </section>

        <!-- Galeria de Figurinos -->
        <section id="galeria-figurinos" class="galeria-figurinos">
            <div class="container">
                <h2>Figurinos</h2>
                <div class="row galeria-fotos">
                    @foreach ($desfile->fotos as $foto)
                        <!-- Fotos de teste -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="foto-container">
                                <img src="{{ asset('assets/img/modelos/'.$foto->foto_desfile) }}" alt="Figurino 1"
                                    class="foto-figurino">
                                <div class="info-card">
                                    <p>Estilista: Nome Estilista</p>
                                    <p>Modelo: Nome Modelo</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button id="ver-mais-btn" class="ver-mais-btn">Ver mais</button>
            </div>
        </section>
    @endforeach
    {{-- contato --}}
    <div class="contato">
        <p>Faça parte da revolução</p>
        <a href="#"></a>
    </div>


    <!-- Footer -->
    <footer class="footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Contatos</h5>
                    <p>Endereço: Rua Exemplo, 123</p>
                    <p>Email: exemplo@fashion.com</p>
                    <p>Telefone: (11) 1234-5678</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Siga-nos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">Instagram</a></li>
                        <li><a href="#" class="text-white">Twitter</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Localização</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093747!2d144.95373531531875!3d-37.816279779751955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727ebed14891b1!2sGoogle%20Australia!5e0!3m2!1sen!2sau!4v1614114578277!5m2!1sen!2sau"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center py-3">
                &copy; 2023 Fashion Show. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/desfile.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
