<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body>
    <header>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Desfile</a></li>
            <li><a href="#">News</a></li>
        </ul>
    </header>
    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('assets/vid/banner1.mov') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="banner-content">
            <h1 data-aos="fade-up" data-aos-duration="1000">SMPFW: SETEMBRO 2025</h1>
            <p data-aos="zoom-in" data-aos-duration="1500" class="subTitleBanner">Uma campanha imperdível</p>
            <a href="#" class="btn btn-primary">Veja mais</a>
        </div>
    </div>

    <!-- Carousel de Estilistas -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 stylist-banner" src="{{ asset('assets/img/3.jpeg') }}" alt="Endrik Souls">
                <div class="stylist-overlay"></div>
                <div class="carousel-caption d-none d-md-block stylist-content">
                    <p class="tag-stylist">News</p>
                    <a href="#" class="btn btn-primary btn-stylist">Endrik Souls</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner" src="{{ asset('assets/img/3.jpeg') }}" alt="Estilista 2">
                <div class="stylist-overlay"></div>
                <div class="carousel-caption d-none d-md-block stylist-content">
                    <p class="tag-stylist">News</p>
                    <a href="#" class="btn btn-primary btn-stylist">Estilista 2</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 stylist-banner" src="{{ asset('assets/img/3.jpeg') }}" alt="Estilista 3">
                <div class="stylist-overlay"></div>
                <div class="carousel-caption d-none d-md-block stylist-content">
                    <p class="tag-stylist">News</p>
                    <a href="#" class="btn btn-primary btn-stylist">Estilista 3</a>
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

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
