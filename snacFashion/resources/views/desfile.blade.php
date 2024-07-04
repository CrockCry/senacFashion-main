<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
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
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('desfile') }}">News</a></li>
            <li><a href="#">Estilistas</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </header>
    {{-- banner --}}
    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('assets/vid/desfile1.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="stylist-overlay"></div>
        <div class="banner-content">
            <h1 data-aos="fade-up" data-aos-duration="1000">TITULO EVENTO: X</h1>
            <p data-aos="zoom-in" data-aos-duration="1500" class="subTitleBanner">Ambição de poder</p>
        </div>
        <a class="btn-mais" href="#sobre-desfile">
            <img src="{{ asset('assets/img/arrow.png') }}" alt="Arrow Icon">
        </a>
    </div>

    <section id="sobre-desfile" class="sobre-desfile">
        <div  class="sobre-desfile-container">
            <div class="desfile-info">
                <h2>Título do Desfile</h2>
                <p class="desfile-data">Data: 01/01/2023</p>
            </div>
            <p class="desfile-descricao">
                <span>campo dedidcado para descrição detalhada do evento</span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>
        </div>
    </section>

    <!-- Galeria de Figurinos -->
    <section id="galeria-figurinos" class="galeria-figurinos">
        <div class="galeria-container">
            <h2>Figurinos</h2>
            <div class="galeria-fotos">
                <!-- Fotos de teste -->
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig3.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div  class="foto-container">
                    <img src="{{ asset('assets/img/fig4.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig5.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig3.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig4.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig5.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig1.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
                <div class="foto-container">
                    <img src="{{ asset('assets/img/fig2.jpeg') }}" alt="Figurino 1" class="foto-figurino">
                    <div class="info-card">
                        <p>Estilista: Nome Estilista</p>
                        <p>Modelo: Nome Modelo</p>
                    </div>
                </div>
            </div>
            <button id="ver-mais-btn" class="ver-mais-btn">Ver mais</button>
        </div>
    </section>


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
    <script src="{{ asset('assets/js/desfile.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
