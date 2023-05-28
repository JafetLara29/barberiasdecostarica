@extends('layouts.public')
@section('content')
    @if (isset($result) && $result == 'success')
        <script>
            Toastify({
                text: "Cita enviada exitosamente",
                duration: 5000,
                gravity: "bottom",
                position: "right",
                className: "custom_toast",
                style: {
                    background: "linear-gradient(to right, green, yellowgreen)",
                },

            }).showToast();
        </script>
    @endif

    <!-- Start Slider Are -->
    <section id="atf-slider" class="atf-slider atf-slider-parallax">
        <div class="swiper-container atf-parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="atf-swiper-img atf-align-item-center"
                        style="border-end-start-radius: 50px; border-start-end-radius: 50px"
                        data-background="{{ asset('/storage/welcome_images/barber.jpg') }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <div class="atf-slider-content">
                                   <h1>@lang('messages.premium_service')</h1>
                                        <p>Implementa la tecnología en tu barbershop y sé parte de la comunidad.</p>
                                        <div class="atf-main-btn mt-5">
                                            <a class="atf-themes-btn" href="{{route('register')}}" data-hover="Quiero ser parte">
                                                <span>Quiero ser parte</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="atf-swiper-img atf-align-item-center"
                        style="border-end-start-radius: 50px; border-start-end-radius: 50px"
                        data-background="{{ asset('storage/public/assets/img/slider/1.jpg') }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <div class="atf-slider-content">
                                        <h1>Causa una mejor impresión</h1>
                                        <p>Una primera impresión negativa es mas dificil de cambiar que una positiva, NO TE
                                            LA JUEGUES!.</p>
                                        <div class="atf-main-btn mt-5">
                                            <a class="atf-themes-btn" href="{{route('register')}}" data-hover="Quiero ser parte">
                                                <span>Quiero ser parte</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider setting -->
            <div class="swiper-control-btn">
                <div class="swiper-button-prev swiper-nav-control prev-control">
                    <span class="arrow"></span>
                </div>
                <div class="swiper-button-next swiper-nav-control next-control">
                    <span class="arrow"></span>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End Slider Area -->


    <!-- About Section Start -->
    <div id="about" class="atf-about style1 atf-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img style="border-top-right-radius: 100px; border-end-start-radius: 100px"
                            src="https://cdn.pixabay.com/photo/2023/02/28/08/56/salon-7820299_640.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 align-self-center">
                    <div class="atf-section-title">
                        <h5>Nosotros</h5>
                        <h2 class="">barberscr</h2>
                        <p class="">
                            Un servicio pensado para tí.
                            ¿Quieres ser parte del nuevo movimiento tecnológico y ofrecer un mejor servicio a tus clientes?
                            ¡Hagamoslo realidad!
                        </p>
                    </div>
                    {{-- <ul class="listing-style">
                        <li>Photographer of good or services for sale</li>
                        <li>Rate of supplies and equipment</li>
                        <li>You can It Solution Easy to Learn </li>
                        <li>You can It Solution Easy to Learn </li>
                    </ul> --}}
                    <div class="atf-about-btn mt-5">
                        <a class="atf-themes-btn" href="#project" data-hover="ver servicios"> <span>ver servicios</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- START PROGRAM -->
    <section id="program" class="atf-program-area" data-stellar-background-ratio="0.3"
        style="background-image:url({{ asset('storage/public/assets/img/slider/3.jpg') }});background-size:cover; background-position: center center">
        <div class="atf-section-padding program-area">
            <div class="container">
                <div class="row clearfix justify-content-center">
                    <div class="col-xl-6 col-12 text-center">
                        <div class="atf-video atf-animation-zoom1">
                            <h2 class="d-none">Puedes Ver vídeo</h2>
                            <a class="atf-video-icon atf-video-icon-border" href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                data-rel="lightcase">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PROGRAM -->

    <!-- START SERVICE -->
    <section id="project" class="atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading"> Servicios</h5>
                        <h2>App</h2>
                        {{-- <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit
                            amet elit dolor sit amet elit.</p> --}}
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->

            <div class="row">
                <div class="col-md-12">
                    <div id="atf-home-active" class="atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/1.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/1.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Agendado de citas</h3>
                                <p class="atf-best-service-description">Permite a tus clientes agendar citas de manera
                                    cómoda y sin retrasos.</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/5.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/5.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Posicionamiento</h3>
                                <p class="atf-best-service-description">Da a conocer tu barbería a nivel nacional con los
                                    rankings y en la lista de barberías afiliadas por cantón.</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/3.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/3.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Control de barberos</h3>
                                <p class="atf-best-service-description">Agrega, edita o elimina a barberos para darles
                                    acceso a la plataforma y tener su propio control de citas.</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/4.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/4.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Control de citas</h3>
                                <p class="atf-best-service-description">Administra las citas agendadas por tus clientes,
                                    confirmalas o cancelalas de acuerdo a tu disponibilidad.</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/6.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/6.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Brinda información</h3>
                                <p class="atf-best-service-description">Con nosotros, tendrás tu espacio para informar a
                                    tus clientes sobre información de contacto de tu barbería y tus barberos. Orarios,
                                    direcciones de llegada y mucho más</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/2.jpg" data-rel="lightcase:myCollection"><img
                                        src="{{ asset('storage/public/assets/img/blog/2.jpg') }}" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Reseñas y valoraciones</h3>
                                <p class="atf-best-service-description">Permite a tus clientes valorar tu servicio,
                                    recomendarlo y puntuarlo para posicionarte a nivel nacional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SERVICE -->

    {{-- <!-- START CHOOSE -->
    <section id="service" class="atf-service-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading"> Service</h5>
                        <h2 class="">Video & Photo Any Service</h2>
                        <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit
                            amet elit dolor sit amet elit.</p>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->


            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="atf-single-service">
                        <div class="service-header">
                            <div class="service-value">
                                <span class="amount"><i class="fas fa-camera-retro"></i></span>
                            </div>
                        </div>
                        <h3 class="title">Photo editing</h3>
                        <ul class="service-content">
                            <li>Photo Sesion</li>
                            <li>Video Editing</li>
                            <li>Online Editing</li>
                            <li class="disable">Art Photo Sesion</li>
                            <li class="disable">24/7 Support</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="atf-single-service">
                        <div class="service-header">
                            <div class="service-value">
                                <span class="amount"><i class="fas fa-video"></i></span>
                            </div>
                        </div>
                        <h3 class="title">Video editing</h3>
                        <ul class="service-content">
                            <li>Photo Sesion</li>
                            <li>Video Editing</li>
                            <li>Online Editing</li>
                            <li class="disable">Art Photo Sesion</li>
                            <li class="disable">24/7 Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="atf-single-service">
                        <div class="service-header">
                            <div class="service-value">
                                <span class="amount"><i class="fas fa-photo-video"></i></span>
                            </div>
                        </div>
                        <h3 class="title">Online editing</h3>
                        <ul class="service-content">
                            <li>Photo Sesion</li>
                            <li>Video Editing</li>
                            <li>Online Editing</li>
                            <li class="disable">Art Photo Sesion</li>
                            <li class="disable">24/7 Support</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CHOOSE -->

    <!-- START HIRE -->
    <div class="atf-hire">
        <div class="container">
            <div class="col-lg-12 col-md-12 atf-hire-area">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                        <div class="atf-hire-inner">
                            <div class="atf-hire-content">
                                <h3>Prepare For your Photo & Video Service</h3>
                                <p>More recently dummy text ever since Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                        </div>
                    </div>
                    <!--- END COL -->
                    <div class="col-lg-4 col-lg-4 col-md-4 col-12 text-right mt-3">
                        <a href="#" class="atf-themes-btn" data-hover="Get Start Now"> <span>Get Start Now</span>
                        </a>
                    </div>
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END HIRE--> --}}

    {{-- OCULTANDO LA CARTERA DE CLIENTES PARA MOSTRARLA CUANDO TENGAMOS CLIENTES REALES --}}

    {{-- <!-- START CLIENT PORTFOLIO -->
    <section id="portfolio" class="atf-portfolio-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading">Gallery</h5>
                        <h2 class="">Our Recent Porfolio</h2>
                        <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor
                            sit amet elit.</p>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->


            <div class="portfolio-filter text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"
                data-wow-offset="0">
                <button class="active" data-filter="*">ALL</button>
                <button data-filter=".filter1">Videography</button>
                <button data-filter=".filter2">Photograph</button>
                <button data-filter=".filter3">Editing</button>
                <button data-filter=".filter4">Arts</button>
            </div>


            <div class="atf-portfolio-grid">
                <div class="col-lg-4 col-md-6 grid-item filter1 filter4">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/1.jpg" data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/1.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Videography</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter2 filter3">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/2.jpg" data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/2.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Photograph</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1 filter4">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="{{ asset('storage/public/assets/img/portfolio/3.jpg') }}"
                                data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/3.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Online Editing</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item  filter2 filter3">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="{{ asset('storage/public/assets/img/portfolio/4.jpg') }}"
                                data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/4.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Arts</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="{{ asset('storage/public/assets/img/portfolio/5.jpg') }}"
                                data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/5.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Mubdi</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1 filter4 filter5">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="{{ asset('storage/public/assets/img/portfolio/6.jpg') }}"
                                data-rel="lightcase:myCollection"><img
                                    src="{{ asset('storage/public/assets/img/portfolio/6.jpg') }}"
                                    alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Mushi</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur
                                adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END COL -->


            <div class="atf-about-btn mt-5 text-center">
                <a class="atf-themes-btn" data-hover="View Photo" href="#">
                    <span> View Photo</span>
                </a>
            </div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CLIENT PORTFOLIO --> --}}


    <!-- TESTIMONIAL SECTION START-->
    <section id="testimonial" class="atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading"> Reseñas</h5>
                        <h2 class="text-white">NUESTROS CLIENTES DICEN</h2>
                        {{-- <p class="text-white">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor
                            sit amet elit dolor sit amet elit.</p> --}}
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->


            <div class="row">
                <!-- Testimonials section Starts-->
                <div class="col-lg-12">
                    <div id="testimonial-slider"
                        class="atf-testimonials-slide atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('storage/public/assets/img/portfolio/1.jpg') }}" alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Mubdi</h3>
                            {{-- <small class="post">Web Designer</small> --}}
                            <p class="description">
                                Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('storage/public/assets/img/portfolio/1.jpg') }}"
                                    alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Mushi</h3>
                            {{-- <small class="post">Web Developer</small> --}}
                            <p class="description">
                                Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('storage/public/assets/img/portfolio/1.jpg') }}"
                                    alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Hasib</h3>
                            {{-- <small class="post">Web Developer</small> --}}
                            <p class="description">
                                Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('storage/public/assets/img/portfolio/1.jpg') }}"
                                    alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Wahid</h3>
                            {{-- <small class="post">Web Developer</small> --}}
                            <p class="description">
                                Exelente app. Nos ha ayudado mucho a mejorar nuestro servicio
                            </p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- TESTIMONIAL SECTION END-->



    <!-- START  PRICING SECTION-->
    <div id="pricing" class="atf-pricing-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading"> Planes</h5>
                        <h2 class="">Nuestros precios</h2>
                        {{-- <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor
                            sit amet elit.</p> --}}
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">15.000</span>
                                <span class="currency">₡</span>
                                <span class="duration">por-mes</span>
                            </div>
                        </div>
                        <h2 class="title">Basico</h2>
                        <ul class="pricing-content">
                            <li>1 Barbero</li>
                            <li>Control De Citas</li>
                            <li>24/7 Support</li>
                            <li class="disable">Ingresos-Egresos</li>
                            <li class="disable">Implementaciones a medida</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="inscribirse" href="#">
                                <span> inscribirse</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">20.000</span>
                                <span class="currency">₡</span>
                                <span class="duration">por-mes</span>
                            </div>
                        </div>
                        <h2 class="title">Standard</h2>
                        <ul class="pricing-content">
                            <li>1-5  Barberos</li>
                            <li>Control De Citas</li>
                            <li>24/7 Support</li>
                            <li class="">Ingresos-Egresos</li>
                            <li class="disable">Implementaciones a medida</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="inscribirse" href="#">
                                <span> inscribirses</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">30.000</span>
                                <span class="currency">₡</span>
                                <span class="duration">por-mes</span>
                            </div>
                        </div>
                        <h2 class="title">Premium</h2>
                        <ul class="pricing-content">
                            <li>5-10  Barberos</li>
                            <li>Control De Citas</li>
                            <li>24/7 Support</li>
                            <li class="">Ingresos-Egresos</li>
                            <li class="">Implementaciones a medida</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="inscribirse" href="#">
                                <span> inscribirse</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END  PRICING SECTION-->


    <!-- BLOG SECTION START-->
    <section id="blog" class="atf-blog-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s"
                        data-wow-offset="0">
                        <h5 class="atf-sheading"> ESTILOS</h5>
                        <h2 class="">ARTICULOS DE INTERES</h2>
                        {{-- <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor
                            sit amet elit.</p> --}}
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div id="blog-slider" class="atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="{{ asset('storage/public/assets/img/blog/7.jpg') }}" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="https://diprofem.com/blog/que-es-el-corte-buzz"> Corte Buzz</a></h5>

                            <p class="atf-post-description pr-lg-3">
                                El Corte Buzz se usa principalente en hombres y se basa en un rapado realizado con
                                maquinilla. También se le conoce como Corte de Bola porque es completamente redondo.
                            </p>
                        </div>
                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="{{ asset('storage/public/assets/img/blog/8.jpg') }}" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="https://tocado.es/corte-fade-en-que-consiste-y-como-mantenerlo/">corte Fade</a></h5>

                            <p class="atf-post-description pr-lg-3">
                                El corte fade (desvanecido)hace referencia al degradado que va de la nuca baja hacia la coronilla, en algunas ocaciones se utiliza navaja para el área más rebajada y en otras ocaciones se trabaja con máquina y tijera.
                            </p>
                        </div>
                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="{{ asset('storage/public/assets/img/blog/9.jpg') }}" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="https://www.allthingshair.com/es-ar/cortes-de-pelo-de-hombre/corte-mullet-hombre/">Corte mullet</a></h5>
                            <p class="atf-post-description pr-lg-3">
                                El corte mullet es un estilo que se caracteriza por llevar la parte de adelante corta, tanto el flequillo como los lados, y la parte de atrás más larga, cubriendo la nuca.
                            </p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- BLOG SECTION END-->

    <!-- MAILCHAMP SECTION START-->
    <div id="mailchamp" class="atf-mailchamp-area" style="background-image:url({{ asset('storage/public/assets/img/slider/4.jpg') }});background-size:cover; background-position: center center">
    </div>
    <!--- END MAILCHAMP -->

    <!-- CONTACT SECTION START-->
    <section id="contact" class="atf-contact-area">
        <div class="atf-section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-6">
                        <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s"
                            data-wow-delay="0.3s" data-wow-offset="0">
                            <h5 class="atf-sheading">CONTACTANOS</h5>
                            <h2 class="">Ponerse en contacto</h2>
                            {{-- <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor
                                sit amet elit dolor sit amet elit.</p> --}}
                        </div>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END ROW -->

                <!-- START REDES BRAND LOGO  -->
                <div id="atf-brand-area" class="atf-section-padding">
                    <div class="atf-brand-overlay">
                        <div class="container">
                            <div class="row clearfix">
                                <div class="col-md-12 col-lg-12">
                                    <div class="atf-brand-active owl-carousel">
                                        <a href="https://www.facebook.com/profile.php?id=100078238669949"><img src="{{ asset('storage/public/assets/img/redes/1.png') }}" alt="image"></a>
                                        <a href="https://www.instagram.com/grupoteamcode/"><img src="{{ asset('storage/public/assets/img/redes/2.png') }}" alt="image"></a>
                                        <a href="https://wa.me/+50662962424"><img src="{{ asset('storage/public/assets/img/redes/3.png') }}" alt="image"></a>
                                        <a href="mailto:grupoteamcode@gmail.com"><img src="{{ asset('storage/public/assets/img/redes/4.png') }}" alt="image"></a>
                                        <a href="https://www.tiktok.com/@teamcode.tech?lang=es"><img src="{{ asset('storage/public/assets/img/redes/5.png') }}" alt="image"></a>
                                    </div>
                                </div><!-- END COL  -->
                            </div><!--END  ROW  -->
                        </div><!-- END CONTAINER  -->
                    </div><!-- END OVERLAY -->
                </div>
                <!-- END REDES BRAND LOGO -->

                <!-- CONTACT SECTION START-->
                    <div class="col-lg-7 col-12 d-block mx-auto my-auto" data-aos="fade-up">
                        <div class="contact">
                            <h4>Send a Message</h4>
                            <form id="contact-form" class="atf-contact-form form" method="POST"
                                action="{{ asset('storage/public/assets/php/mail.php') }}">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="form_email"
                                            placeholder="Your Email" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="subject" class="form-control" id="subject"
                                            placeholder="Your Subject" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                            placeholder="Your Mobile" required="required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="message" placeholder="Your Message"
                                            required="required"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-left atf-contact-btn">
                                            <button type="submit" value="Submit Now" name="submit" id="submitButton"
                                                class="btn atf-themes-btn" data-hover="Send Message"
                                                title="Submit Your Message!"><span>Send Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div><!-- END COL -->
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        <!--- END OVERLAY -->
    </section>
    <!-- CONTACT SECTION END-->
@endsection
