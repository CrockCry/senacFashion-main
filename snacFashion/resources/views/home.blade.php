<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ssf8bhz.css">

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

    <header>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Estilistas</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>
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
            <a class="btn-mais" href="#carouselExampleFade">ver mis</a>
        </div>
    </div>

    <!-- Carousel de Estilistas -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 stylist-banner parallax" src="{{ asset('assets/img/3.jpeg') }}"
                    alt="Endrik Souls">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    {{-- <p class="tag-stylist">News</p> --}}
                    <a href="#" class="btn-stylist">Endrik Souls</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner parallax" src="{{ asset('assets/img/6.jpeg') }}"
                    alt="Estilista 2">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    {{-- <p class="tag-stylist">News</p> --}}
                    <a href="#" class="btn-stylist">Jully Sult</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner parallax" src="{{ asset('assets/img/5.jpeg') }}"
                    alt="Estilista 3">
                <div class="stylist-overlay"></div>
                <div class="stylist-content">
                    {{-- <p class="tag-stylist">News</p> --}}
                    <a href="#" class="btn-stylist">Gregory Canot</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <div class="contato">
        <p>Se interessou?</p>
        <a href="#">Fale conosco!</a>
    </div>



    <script>
        window.addEventListener('load', function() {
            const preloader = document.querySelector('.preloader');
            setTimeout(() => {
                preloader.classList.add('hidden');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500); // Tempo para a transição de opacidade
            }, 3000); // Duração de 3 segundos
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
