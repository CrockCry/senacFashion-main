<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
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
        <img src="{{ asset('assets/img/pre2.png') }}" alt="Preload Background" class="preload-image">
        <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo" class="preload-logo">
    </div>

    {{-- cabeçalho --}}
    <header>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Estilistas</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>
    {{-- banner --}}
    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('assets/vid/banner1.mov') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="stylist-overlay"></div>
        <div class="banner-content">
            <h1 data-aos="fade-up" data-aos-duration="1000">SMPFW: SETEMBRO 2025</h1>
            <p data-aos="zoom-in" data-aos-duration="1500" class="subTitleBanner">Uma campanha imperdível</p>
            <a href="#" class="btn-banner">Veja mais</a>
        </div>
        <a class="btn-mais" href="#carouselExampleFade">
            <img src="{{ asset('assets/img/arrow.png') }}" alt="Arrow Icon">
        </a>
    </div>

    <!-- Carousel de Estilistas -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 stylist-banner parallax" src="{{ asset('assets/img/3.jpeg') }}"
                    alt="Endrik Souls">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    <a href="#" class="btn-stylist">Endrik Souls</a>
                    <img class="img-artista" src="{{ asset('assets/img/artista.png') }}" alt="Imagem do Artista">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner parallax" src="{{ asset('assets/img/6.jpeg') }}"
                    alt="Estilista 2">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    <a href="#" class="btn-stylist">Jully Sult</a>
                    <img class="img-artista" src="{{ asset('assets/img/artista.png') }}" alt="Imagem do Artista">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner" src="{{ asset('assets/img/5.jpeg') }}" alt="Estilista 3">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    <a href="#" class="btn-stylist">Gregory Canot</a>
                    <img class="img-artista" src="{{ asset('assets/img/artista.png') }}" alt="Imagem do Artista">
                </div>
            </div>
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
                <div class="parceria">
                    <img src="{{ asset('assets/img/ysl.png') }}" alt="">
                    <p>x</p>
                    <img src="{{ asset('assets/img/senac.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    {{-- contato --}}
    <div class="contato">
        <p>Faça parte da revolução</p>
        <a href="#"></a>
    </div>

    <!-- Footer -->
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
                    width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
