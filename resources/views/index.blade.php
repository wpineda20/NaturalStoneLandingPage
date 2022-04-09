<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/btnScrollToTop.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/tree.svg') }}">
</head>

<body>
    <div id="app">
        <div class="banner header">
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-header">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">

                        </ul>
                    </div>
                </div>
            </nav> --}}
            <div class="container">
                <div class="header-items">
                    <div class="header-icons">
                        <a href="https://www.instagram.com/naturalstonessv/" target="_blank">
                            <img src="/img/instagram.svg" class="h-icon" alt="header-icons">
                        </a>
                        <a href="https://www.facebook.com/naturalstones.es" target="_blank">
                            <img src="/img/facebook.svg" class="h-icon" alt="header-icons">
                        </a>
                    </div>
                    <div class="header-text">
                        <h1 class="h-title">Lorem ipsum dolor</h1>
                        <p class="h-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. Enim
                            convallis
                            eget mattis non eu mauris arcu <br> dui.</p>
                    </div>
                    <div class="header-image">
                        <img src="img/cabinet.jpg" alt="header-img" class="header-img">
                    </div>
                </div>
            </div>
        </div>

        <main class="main">

            {{-- Scroll To Top Button --}}

            <button class="btnScrollToTop" onclick="scrollToTop();">
                <i class="bi bi-arrow-up"></i>
            </button>

            {{-- Scroll To Top Button --}}

            {{-- WhatsApp Button --}}

            <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=50372842854" target="_blank"
                title='Escribemos a nuestro WhatsApp!'>
                <i class="bi bi-whatsapp"></i>
            </a>

            {{-- WhatsApp Button --}}


            <section class="summer-sale-section ">
                <div class="summer-sale container">
                    <h1 class="summer-sale-title">
                        summer sale
                    </h1>
                    <p class="summer-sale-subtitle">
                        Register and get 20% for all <br>
                        Praesent dictum amet est lacus accumsan vel lacus ac.
                    </p>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-2 pt-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/sink.jpg" class="card-img-top" alt="sink">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/kitchen.jpg" class="card-img-top" alt="kitchen">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/sink.jpg" class="card-img-top" alt="sink">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="summer-sale-contact pt-4 pb-5 text-center">
                    <a href="https://api.whatsapp.com/send?phone=50372842854" target="_blank"
                        class="btn-contact">Contact us</a>
                </div>
            </section>
            <section class="recommendations">
                <div class="container">
                    <h1 class="recommendations-title">
                        Lorem ipsum dolor
                    </h1>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-5 pb-5">
                        <div class="col mx-auto">
                            <div class="card-rem h-100">
                                <img src="img/marmol-crema-marfil.jpg" class="card-img-top-rem img-fluid"
                                    alt="marmol-cream-marfil">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Eget non imperdiet.</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/cart.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/stopwatch.svg" class="icon-card-rem" alt="Card-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-rem h-100">
                                <img src="img/cuarzo-negro-diamante.jpg" class="card-img-top-rem img-fluid"
                                    alt="cuarzo-negro-diamente">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Eget non imperdiet.</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        {{-- <img src="/img/cart.svg" class="icon-card-rem" alt="Card-img"> --}}
                                        <img src="/img/stopwatch.svg" class="icon-card-rem" alt="Card-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-rem h-100">
                                <img src="img/travertino-andes-gold-brillado.jpg" class="card-img-top-rem img-fluid"
                                    alt="travertino-andes-gold">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Eget non imperdiet.</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/cart.svg" class="icon-card-rem" alt="Card-img">
                                        {{-- <img src="/img/stopwatch.svg" class="icon-card-rem" alt="Card-img"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <section class="carousels">
                <div class="container">
                    <h1 class="recommendations-title">
                        Carousel
                    </h1>
                </div>
            </section>
            <section class="services-section">
                <div class="container">
                    <h1 class="services-title text-center">
                        Lorem ipsum dolor
                    </h1>
                </div>
                <div class="container">
                    <div class=" services-items grid">

                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>
                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>

                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>
                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>

                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>
                        <div class="services-content">
                            <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                            <p class="text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                        </div>


                    </div>
                </div>
            </section>
        </main>

        <footer class="footer bg-footer">
            <div class="container">
                <div class=" pt-5 pb-5 ">
                    <div class="footer-items">
                        <div class="footer-content">
                            <p class="text-bold-footer">C. La Mascota #222, <br>
                                San Salvador CP 1101</p>
                            <p class="text-regular-footer">+ 503 2283-9470 ó + 503 7837-8898</p>
                            <p class="text-regular-footer">correoelectronico@gmail.com</p>
                        </div>
                        <div class="footer-content">
                            <p class="text-regular-footer">Facebook</p>
                            <p class="text-regular-footer mb-5">Instragram</p>
                            <p class="text-regular-footer">&copy; 2022 Fernando Pineda. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>