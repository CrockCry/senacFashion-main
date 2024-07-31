<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ssf8bhz.css">
    <link rel="stylesheet" href="https://use.typekit.net/peg6efo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        @font-face {
            font-family: "ff-good-headline-web-pro-ext";
            src: url('path-to-font-file') format('woff2');
        }

        /* Preloader styles */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            overflow: hidden;
        }

        .preloader .preload-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .preloader .preload-logo {
            position: relative;
            z-index: 2;
            max-width: 50%;
            max-height: 50%;
        }

        .hidden {
            opacity: 0;
            transition: opacity 0.5s ease;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/vid/PreLoadingFinal.gif') }}" alt="Preload Background" class="preload-image">
        <img src="{{ asset('assets/img/logo4.png') }}" alt="Logo" class="preload-logo">
    </div>

    {{-- cabeçalho --}}
    <header id="main-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo4.png') }}" alt=""></a>
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
    {{-- banner --}}
    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('assets/vid/' . $banner->banner_path) }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="stylist-overlay"></div>
        <div class="banner-content">
            <h1 data-aos="fade-up" data-aos-duration="1000" class="tittleBanner">SMPFW: SETEMBRO 2024</h1>
            <p data-aos="zoom-in" data-aos-duration="1500" class="subTitleBanner">Uma campanha imperdível</p>
            <a href="{{ route('desfile') }}" class="btn-banner">Veja mais</a>
        </div>
        <a class="btn-mais" href="#carouselExampleFade">
            <img src="{{ asset('assets/img/arrow.png') }}" alt="Arrow Icon">
        </a>
    </div>

    <!-- Carousel de Estilistas -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($estilistas as $index => $estilista)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img class="d-block w-100 stylist-banner parallax"
                        src="{{ asset('assets/img/'.$estilista->imagem_path) }}" alt="Endrik Souls">
                    <div class="stylist-overlay"></div>
                    <div class="stylist-content">
                        <p class="stylist-tittle">Estilista</p>
                        <a href="#" class="btn-stylist">{{ $estilista->nome }}</a>
                        <img class="img-artista" src="{{ asset('assets/img/artista.png') }}" alt="Imagem do Artista">
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariicona-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>


    {{-- sobre --}}
    <div class="about">
        <div class="about-container">
            <h1>Sobre</h1>
            <div>
                <p> A iniciativa do evento São Miguel Paulista Fashion Week é promovida pelo Senac – Instituição
                    reconhecida
                    por seu compromisso com a educação de qualidade e a inovação.
                    Com a primeira edição, realizada em 2023, o evento celebra a moda por meio da inclusão,
                    sustentabilidade, diversidade e empreendedorismo no setor.
                </p>
                <div class="parceria" >
                    <img src="{{ asset('assets/img/logo4.png') }}" alt="">
                    <img src="{{ asset('assets/img/senac.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    {{-- contato --}}
    <div class="contato">
        <a href="https://www.sp.senac.br/busca?q=moda#c">Faça parte da revolução</a>
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
            <div class="text-center">
                &copy; 2023 Fashion Show. Todos os direitos reservados.
            </div>
        </div>
    </footer>

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
