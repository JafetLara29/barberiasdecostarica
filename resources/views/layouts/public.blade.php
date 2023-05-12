<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Animation css --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    {{-- Monster styles --}}
    {{-- <link rel="stylesheet" href="{{asset('storage/public/assets/bootstrap/css/bootstrap.css')}}"> --}}
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('storage/public/assets/fonts/font-awesome.css')}}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{asset('storage/public/assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/public/assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <!--animate Css-->
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/lightcase.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/swiper.min.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('storage/public/assets/css/responsive.css')}}">

    @vite([
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/css/app.css',
    ])

    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="{{ asset('storage/assets/css/sweetalert.css') }}">

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Animation css --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    @vite(['resources/css/adminschedule.css'])

    <!-- Calendar -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>

    {{-- typeahead --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>

<body>
    {{-- Nuevo --}}

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- START PRELOADER -->
        <div class="atf-preloader">
            <div class="atf-status">
                <div class="atf-status-mes"></div>
            </div>
        </div>
        <!--  END PRELOADER -->

        <!-- START back-to-top -->
        <button class="atf-scroll-top atf-back-to-top" data-targets="html">
            <i class="fas fa-long-arrow-alt-up atf-scrollup-icon"></i>
        </button>
        <!-- END back-to-top-->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="atf-top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="atf-top-header-in">
                                <ul class="atf-top-header-list">
                                    <li><i class="fas fa-envelope"></i> <a class="a-navbar-link" href="mailto:contact@teamcodecr.tech">contact@teamcodecr.tech</a></li>
                                    <li><i class="fas fa-phone-volume"></i><a class="a-navbar-link" href="#">6296 2424</a></li>
                                    <li><i class="fas fa-map-marker-alt"></i><a class="a-navbar-link" href="#">Costa Rica</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="atf-top-social">
                                <div class="atf-top-social-icon">
                                    <a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
                                    {{-- <a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
                                            <a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
                                            <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="atf-main-responsive-nav">
                <div class="container">
                    <div class="atf-main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                {{-- <img src="{{asset('storage/public/assets/img/logo.png')}}" class="logo" alt="logo"> --}}
                                <a class="navbar-brand text-light logo" href="/">BarbersCR</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="atf-main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            {{-- <img src="{{asset('storage/public/assets/img/logo.png')}}" class="logo" alt="logo"> --}}
                            <a class="navbar-brand text-light logo" href="/">BarbersCR</a>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav nav justify-content-center ms-auto">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Inicio<i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Comunidad</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index1.html" class="nav-link">Reseñas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Paginas <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">Nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service.html" class="nav-link">Servicios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="portfolio.html" class="nav-link">Galleria</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="planes.html" class="nav-link">Planes</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="comunidad.html" class="nav-link">Comunidad</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="client.html" class="nav-link">Clientes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Equipo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Reseñas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contacto.html" class="nav-link">Contacto</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="mi barber.html" class="nav-link">Mi barbershop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy.html" class="nav-link">Política de Privacidad</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms.html" class="nav-link">Terminoss & Condiciones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service.html" class="nav-link">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a href="portfolio.html" class="nav-link">Galleria</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Planes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="client.html" class="nav-link">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contacto <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Equipo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blogs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('search')}}" class="nav-link">Buscar barbershop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('login')}}" class="nav-link">Mi barber</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        @yield('content')

        <!-- FOOTER SECTION START-->
        <footer id="footer" class="atf-footer-area">
            <div class="container">
                <div class="atf-footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 atf-footer-link">
                            <div class="atf-footer-box">
                                <h5>About Muhydi</h5>
                                <p class="mt-3 pr-3"> Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit.</p>
                                <div class="atf-footer-social-icon mt-3">
                                    <a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
                                    <a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
                                    <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
                                </div>
                            </div>
                        </div><!--- END COL -->

                        <div class="col-lg-2 col-md-6 col-12 atf-footer-link">
                            <h5>enlaces rápidos</h5>
                            <ul class="atf-list-menu">
                                <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Empezar</a></li>
                                <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Soporte 24/7</a></li>
                                <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>About Us</a></li>
                                <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Necesito ayuda</a></li>
                                <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Contacto</a></li>
                            </ul>
                        </div><!--- END COL -->

                        <div class="col-lg-2 col-md-6 col-12 atf-footer-link">
                            <h5>Compañía</h5>
                            <ul class="atf-list-menu">
                                <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Nuestro servicio</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Nuestra Privacidad</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Noticias actualizadas</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Nuestro equipo</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Consulta Gratis</a></li>
                            </ul>
                        </div><!--- END COL -->

                        <div class="col-lg-5 col-md-6 col-12 atf-footer-link">
                            <h5>Nuestro Mapa </h5>
                            <!-- Google Map start-->
                            <div id="atf-map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.1516153355674!2d-105.24276688517374!3d38.43796677964402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87148f9a4466afe5%3A0x24b66e04146cc9e2!2sCanon%20City%20Santa%20Fe%20Depot!5e0!3m2!1sen!2sbd!4v1622049345355!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <!-- Google Map end -->
                        </div><!--- END COL -->
                    </div><!--- END ROW -->
                </div><!--- END SINGLE FOOTER -->
            </div><!--- END OVERLAY -->

            <div class="atf-footer-boottom text-center mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy;Copyright - All Right Reserved.Designed <i class="fa fa-heart ms-1 me-1"></i> by <a href="#">Theme Family</a> </p>
                        </div><!--- END COL -->
                    </div><!--- END ROW -->
                </div><!--- END ROW -->
            </div>
            <!-- FOOTER SECTION END-->
        </footer><!--- END FOOTER -->

    </div>
    <!-- PAGE WRAPPER END-->



    <!-- Latest jQuery -->
    <script src="{{asset('storage/public/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{asset('storage/public/assets/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- modernizer JS -->
    <script src="{{asset('storage/public/assets/js/modernizr.custom.js')}}"></script>
    <!-- imagesloaded JS -->
    <script src="{{asset('storage/public/assets/js/imagesloaded.pkgd.js')}}"></script>
    <!-- isotope.pkgd JS -->
    <script src="{{asset('storage/public/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- stellar JS -->
    <script src="{{asset('storage/public/assets/js/jquery.stellar.min.js')}}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{asset('storage/public/assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{asset('storage/public/assets/js/waypoints.min.js')}}"></script>
    <!-- jquery.appear js -->
    <script src="{{asset('storage/public/assets/js/jquery.appear.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('storage/public/assets/js/easing.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('storage/public/assets/js/wow.min.js')}}"></script>
    <!-- MeanMenu JS  -->
    <script src="{{asset('storage/public/assets/js/jquery.meanmenu.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{asset('storage/public/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('storage/public/assets/js/lightcase.js')}}"></script>
    <!-- ajaxchimp js -->
    <script src="{{asset('storage/public/assets/js/ajaxchimp.min.js')}}"></script>
    <!-- form-contact js -->
    <script src="{{asset('storage/public/assets/js/form-contact.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('storage/public/assets/js/main.js')}}"></script>
    {{-- Sweet Alert Script --}}
    <link rel="stylesheet" href="{{ asset('storage/assets/js/sweetalert.js') }}">
    
    @vite(['resources/js/schedules.js'])

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>