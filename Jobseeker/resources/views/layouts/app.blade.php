<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- datepicker --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- NAVBAR -->
    <section id="header" class="header">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="#">Jobstreet</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn-login text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @else

                            <a href="{{ route('logout') }}" class="btn-logout text-decoration-none" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} <i class="fas fa-sign-out ms-2"></i>
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer id="footer" class="footer-area bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="pt-4">
                        <img src="{{ asset('img/6.png') }}" alt="" class="logo-footer">
                    </h2>
                </div>
            </div>
            <div class="row g-3 justify-content-between">
                <div class="col-md-4 pt-1">
                    <div class="text-footer py-2">
                        <h5 class="text-white text-uppercase">Indonesia</h5>
                        <h6 class="text-white">Jakarta</h6>
                        <p class="text-white">
                            AD Premier Office Park, 9th Floor
                            Jl. TB Simatupang No.5, Ragunan, Pasar Minggu
                            South Jakarta City, Jakarta 12550
                        </p>
                    </div>
                    <div class="text-footer py-2">
                        <h6 class="text-white">Bali</h6>
                        <p class="text-white">
                            Jl. Karang Mas, Jimbaran, South Kuta
                            Kabupaten Badung, Bali, 80361
                        </p>
                    </div>
                    <div class="text-footer py-2">
                        <h6 class="text-white">Singapore</h6>
                        <p class="text-white">
                            10 Anson Road #22-02 International Plaza,
                            Singapore, 079903
                        </p>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                            <div class="text-footer py-2">
                                <h4 class="text-white text-uppercase">for employer</h4>
                                <div class="link text-white">
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li>jobseeker.partners</li>
                                        <li>jobseeker.services</li>
                                        <li>jobseeker.software</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-footer py-2">
                                <h4 class="text-white text-uppercase">for candidate</h4>
                                <div class="link text-white">
                                    <ul class="list-unstyled text-light footer-link-list">
                                        <li>jobseeker.app</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa-regular fa-envelope fa-fw"></i>
                            <a href="#" class="text-decoration-none ms-2">info@jobseeker.company</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp fa-fw"></i>
                            <a class="text-decoration-none ms-2" href="https://wa.me/6281318817887">+62 813 1881 7887</a>
                        </li>
                        <li>
                            <span class="footer-social-overlap footer-social-icons-wrapper">
                                <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>

                                <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus" itemprop="significantLink">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row text-white py-3">
                <hr>
                <div class="row g-2 justify-content-between d-fle">
                    <div class="col-md-6">
                        <p class="text-light">Copyright &copy; 2022
                            <a href="index.html" class="text-white text-decoration-none">JobSeekerApps Pte. Ltd</a>
                        </p>
                    </div>
                    <div class="col-md-3 d-flex">
                        <a href="#" class="me-5 text-decoration-none">Privacy Policy</a>
                        <a href="#" class="ms-2 text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
    </footer>

    {{-- required --}}
    @include('sweetalert::alert')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- datepicker --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/7f2ed2a5ac.js" crossorigin="anonymous"></script>
</body>
</html>
