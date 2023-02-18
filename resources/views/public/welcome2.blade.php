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
                                <li><i class="fas fa-envelope"></i> <a href="#">example@gmail.com</a></li>
                                <li><i class="fas fa-phone-volume"></i><a href="#">555-888-2222 </a></li>
                                <li><i class="fas fa-map-marker-alt"></i><a href="#">London & Japan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="atf-top-social">
                            <div class="atf-top-social-icon">
                                <a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
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
                            <img src="assets/img/logo.png" class="logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="atf-main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav nav justify-content-center ms-auto">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home Silder</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index1.html" class="nav-link">Home Default</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service.html" class="nav-link">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="portfolio.html" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="error.html" class="nav-link">404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="client.html" class="nav-link">Client</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy.html" class="nav-link">Privacy & Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms.html" class="nav-link">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="service.html" class="nav-link">Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="portfolio.html" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="client.html" class="nav-link">Client</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Slider Are -->
    <section id="atf-slider" class="atf-slider atf-slider-parallax">
        <div class="swiper-container atf-parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="atf-swiper-img atf-align-item-center" data-background="assets/img/slider/2.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <div class="atf-slider-content">
                                        <h1>Video Graphic</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit.</p>
                                        <div class="atf-main-btn mt-5">
                                            <a class="atf-themes-btn" href="#" data-hover="Read More">
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="atf-swiper-img atf-align-item-center" data-background="assets/img/slider/1.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <div class="atf-slider-content">
                                        <h1>Photo Graphic</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit.</p>
                                        <div class="atf-main-btn atf-video atf-animation-zoom1 mt-5">

                                            <a href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase" class="atf-themes-btn" data-hover="watch Video"><span>Watch Video</span>
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
                        <img src="assets/img/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 align-self-center">
                    <div class="atf-section-title">
                        <h5>About Us</h5>
                        <h2 class="">I'm photographer & video grapher 10 Years.</h2>
                        <p class="">You can It Solution Easy to Learn and Program that you can easily Develop Cost of supplies and equipment good or services for sale.</p>
                    </div>
                    <ul class="listing-style">
                        <li>Photographer of good or services for sale</li>
                        <li>Rate of supplies and equipment</li>
                        <li>You can It Solution Easy to Learn </li>
                        <li>You can It Solution Easy to Learn </li>
                    </ul>
                    <div class="atf-about-btn mt-5">
                        <a class="atf-themes-btn" href="#" data-hover="about us"> <span>about us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- START PROGRAM -->
    <section id="program" class="atf-program-area" data-stellar-background-ratio="0.3" style="background-image:url(assets/img/slider/3.jpg);background-size:cover; background-position: center center">
        <div class="atf-section-padding program-area">
        <div class="container">
            <div class="row clearfix justify-content-center">
                <div class="col-xl-6 col-12 text-center">
                    <div class="atf-video atf-animation-zoom1">
                    <h2 class="d-none">You can See video</h2>
                    <a class="atf-video-icon atf-video-icon-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
                </div>
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END PROGRAM -->

    <!-- START SERVICE -->
    <section id="project" class="atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading"> Recent Work</h5>
                        <h2 class="">Our Latest Project</h2>
                        <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->

            <div class="row">
                <div class="col-md-12">
                    <div id="atf-home-active" class="atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/1.jpg" data-rel="lightcase:myCollection"><img src="assets/img/blog/1.jpg" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Video Graphic Service</h3>
                                <p class="atf-best-service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/2.jpg" data-rel="lightcase:myCollection"><img src="assets/img/blog/2.jpg" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Photographic Analysis</h3>
                                <p class="atf-best-service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/3.jpg" data-rel="lightcase:myCollection"><img src="assets/img/blog/3.jpg" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Advertise Video</h3>
                                <p class="atf-best-service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam</p>
                            </div>
                        </div>

                        <div class="atf-best-service-slide">
                            <div class="atf-best-service-img">
                                <a href="assets/img/blog/1.jpg" data-rel="lightcase:myCollection"><img src="assets/img/blog/1.jpg" alt="Blog"></a>
                            </div>
                            <div class="atf-best-service-content text-center">
                                <h3 class="atf-best-service-title">Event Video</h3>
                                <p class="atf-best-service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ducimus est, excepturi nam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SERVICE -->

    <!-- START COMPANY BRAND LOGO  -->
    <div id="atf-brand-area" class="atf-section-padding">
        <div class="atf-brand-overlay">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-12">
                        <div class="atf-brand-active owl-carousel">
                            <a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/3.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/4.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/5.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/3.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/4.png" alt="image"></a>
                            <a href="#"><img src="assets/img/partner/5.png" alt="image"></a>
                        </div>
                    </div><!-- END COL  -->
                </div><!--END  ROW  -->
            </div><!-- END CONTAINER  -->
        </div><!-- END OVERLAY -->
    </div>
    <!-- END COMPANY BRAND LOGO -->

    <!-- START CHOOSE -->
    <section id="service" class="atf-service-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading"> Service</h5>
                        <h2 class="">Video & Photo Any Service</h2>
                        <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->


            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
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

                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
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
                <div class="col-lg-4 col-md-6 col-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
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

            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
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
                    </div><!--- END COL -->
                    <div class="col-lg-4 col-lg-4 col-md-4 col-12 text-right mt-3">
                        <a href="#" class="atf-themes-btn" data-hover="Get Start Now"> <span>Get Start Now</span> </a>
                    </div>
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END HIRE-->


    <!-- START PORTFOLIO -->
    <section id="portfolio" class="atf-portfolio-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading">Gallery</h5>
                        <h2 class="">Our Recent Porfolio</h2>
                        <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->


            <div class="portfolio-filter text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
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
                            <a href="assets/img/portfolio/1.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/1.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Videography</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter2 filter3">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/2.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/2.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Photograph</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1 filter4">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/3.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/3.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Online Editing</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item  filter2 filter3">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/4.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/4.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Arts</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/5.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/5.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Mubdi</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->

                <div class="col-lg-4 col-md-6 grid-item filter1 filter4 filter5">
                    <div class="atf-single-portfolio">
                        <div class="portfolio-img">
                            <a href="assets/img/portfolio/6.jpg" data-rel="lightcase:myCollection"><img src="assets/img/portfolio/6.jpg" alt="Portfolio Image"></a>
                        </div>
                        <div class="portfolio-content">
                            <h2 class="title">Mushi</h2>
                            <p class="description">
                                Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
                            </p>
                            <div class="portfolio-btn">
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END COL -->


            <div class="atf-about-btn mt-5 text-center">
                <a class="atf-themes-btn" data-hover="View Photo" href="#">
                    <span> View Photo</span>
                </a>
            </div>
        </div><!--- END CONTAINER -->
    </section>
    <!-- END PORTFOLIO -->


     <!-- TESTIMONIAL SECTION START-->
    <section id="testimonial" class="atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading"> Testimonial</h5>
                        <h2 class="text-white">Client Feedback</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->


            <div class="row">
                <!-- Testimonials section Starts-->
                <div class="col-lg-12">
                    <div id="testimonial-slider" class="atf-testimonials-slide atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/img/portfolio/1.jpg" alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Mubdi</h3>
                            <small class="post">Web Designer</small>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ornare eros. Proin nec pulvinar augue, at.
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/img/portfolio/2.jpg" alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Mushi</h3>
                            <small class="post">Web Developer</small>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ornare eros. Proin nec pulvinar augue, at.
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/img/portfolio/3.jpg" alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Hasib</h3>
                            <small class="post">Web Developer</small>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ornare eros. Proin nec pulvinar augue, at.
                            </p>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/img/portfolio/1.jpg" alt="Portfolio Image">
                            </div>
                            <h3 class="testimonial-title">Al-Wahid</h3>
                            <small class="post">Web Developer</small>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ornare eros. Proin nec pulvinar augue, at.
                            </p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
   <!-- TESTIMONIAL SECTION END-->

   <!-- START  PRICING SECTION-->
    <div id="pricing" class="atf-pricing-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading"> Pricing</h5>
                        <h2 class="">Everyone of Pricing</h2>
                        <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">10</span>
                                <span class="currency">$</span>
                                <span class="duration">per-month</span>
                            </div>
                        </div>
                        <h2 class="title">Basic</h2>
                        <ul class="pricing-content">
                            <li>Photo Editing Sesion</li>
                            <li>Video Editing Sesion</li>
                            <li>Online Editing Sesion</li>
                            <li class="disable">Art Photo Sesion</li>
                            <li class="disable">24/7 Support</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="Sign Up" href="#">
                                <span> Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">70</span>
                                <span class="currency">$</span>
                                <span class="duration">per-month</span>
                            </div>
                        </div>
                        <h2 class="title">Standard</h2>
                        <ul class="pricing-content">
                            <li>Photo Editing Sesion</li>
                            <li>Video Editing Sesion</li>
                            <li>Online Editing Sesion</li>
                            <li class="disable">Art Photo Sesion</li>
                            <li class="disable">24/7 Support</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="Sign Up" href="#">
                                <span> Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <div class="price-value">
                                <span class="amount">120</span>
                                <span class="currency">$</span>
                                <span class="duration">per-month</span>
                            </div>
                        </div>
                        <h2 class="title">Premium</h2>
                        <ul class="pricing-content">
                            <li>Photo Editing Sesion</li>
                            <li>Video Editing Sesion</li>
                            <li>Online Editing Sesion</li>
                            <li class="">Art Photo Sesion</li>
                            <li class="">24/7 Support</li>
                        </ul>
                        <div class="atf-about-btn">
                            <a class="atf-themes-btn" data-hover="Sign Up" href="#">
                                <span> Sign Up</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END  PRICING SECTION-->

    <!-- START  PROCESS SECTION-->
    <section id="processing" class="atf-processing-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading">Process</h5>
                        <h2 class="">Our Processing</h2>
                        <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <div class="process-icon">
                            <span><i class="fa fa-globe"></i></span>
                        </div>
                        <h3 class="title">Editing <span>Process</span></h3>
                        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <div class="process-icon">
                            <span><i class="fa fa-rocket"></i></span>
                        </div>
                        <h3 class="title">Video <span>Graphic</span></h3>
                        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <div class="process-icon">
                            <span><i class="fa fa-rocket"></i></span>
                        </div>
                        <h3 class="title">Final <span>Shoting</span></h3>
                        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="process">
                        <div class="process-icon">
                            <span><i class="fa fa-rocket"></i></span>
                        </div>
                        <h3 class="title">Photo <span>Graphy</span></h3>
                        <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END  PROCESS SECTION-->

    <!-- BLOG SECTION START-->
    <section id="blog" class="atf-blog-area atf-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h5 class="atf-sheading"> News Feed</h5>
                        <h2 class="">News Update & Blog</h2>
                        <p>Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div id="blog-slider" class="atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="assets/img/blog/3.jpg" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="blog.html">Recent Shooting News...</a></h5>

                            <p class="atf-post-description pr-lg-3">
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Maecenas cuatfus sed felis sit amet ull amcorper. In congue felis vitae.
                            </p>
                            <ul class="atf-post-bar">
                                <li class="atf-post-date"><i class="far fa-clock"></i>May 20,2021</li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#">1.5k</a></li>
                            </ul>
                        </div>

                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="assets/img/blog/2.jpg" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="blog.html">Video Photography Service...</a></h5>

                            <p class="atf-post-description pr-lg-3">
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Maecenas cuatfus sed felis sit amet ull amcorper. In congue felis vitae.
                            </p>
                            <ul class="atf-post-bar">
                                <li class="atf-post-date"><i class="far fa-clock"></i>May 20,2021</li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#">1.5k</a></li>
                            </ul>
                        </div>

                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="assets/img/blog/1.jpg" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="blog.html">Online Video Editing...</a></h5>
                            <p class="atf-post-description pr-lg-3">
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Maecenas cuatfus sed felis sit amet ull amcorper. In congue felis vitae.
                            </p>

                            <ul class="atf-post-bar">
                                <li class="atf-post-date"><i class="far fa-clock"></i>May 20,2021</li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#">1.5k</a></li>
                            </ul>
                        </div>

                        <div class="atf-post-slide">
                            <div class="atf-post-img">
                                <img src="assets/img/blog/3.jpg" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="blog.html">It Solution World...</a></h5>
                            <p class="atf-post-description pr-lg-3">
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Maecenas cuatfus sed felis sit amet ull amcorper. In congue felis vitae.
                            </p>
                            <ul class="atf-post-bar">
                                <li class="atf-post-date"><i class="far fa-clock"></i>May 20,2021</li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#">1.5k</a></li>
                            </ul>
                        </div>

                        <div class="atf-post-slide">

                            <div class="atf-post-img">
                                <img src="assets/img/blog/2.jpg" alt="Blog">
                            </div>
                            <h5 class="atf-post-title"><a href="blog.html">Best Art Photo Service...</a></h5>
                            <p class="atf-post-description pr-lg-3">
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. Maecenas cuatfus sed felis sit amet ull amcorper. In congue felis vitae.
                            </p>
                            <ul class="atf-post-bar">
                                <li class="atf-post-date"><i class="far fa-clock"></i>May 20,2021</li>
                                <li class="atf-author"><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li class="atf-comment"><i class="fa fa-comment"></i><a href="#">1.5k</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
   <!-- BLOG SECTION END-->

   <!-- MAILCHAMP SECTION START-->
    <div id="mailchamp" class="atf-mailchamp-area" style="background-image:url(assets/img/slider/4.jpg);background-size:cover; background-position: center center">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-12 atf-mailchamp-headding">
                    <h2>Subcribe to Newletter Now</h2>
                </div><!--- END COL -->
                <div class="col-lg-6 col-md-6 col-12 atf-mailchamp-subscribe mx-auto my-auto mt-1">
                    <form class="form-group" id="mc-form">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required">
                        <button type="submit" id="subscribe-button" class="btn">Subcribe</button>
                        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                            <br>
                        <label class="atf-subscription-label" for="email"></label>
                    </form>
                </div><!--- END COL -->
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div>
    <!--- END MAILCHAMP -->



    <!-- CONTACT SECTION START-->
    <section id="contact" class="atf-contact-area">
        <div class="atf-section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-6">
                        <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                            <h5 class="atf-sheading">Contact Us</h5>
                            <h2 class="">Get In Touch</h2>
                            <p class="">Lorem ipsum dolor sit amet elit , consectetur adipiscing , sed eiusmod tempor sit amet elit dolor sit amet elit.</p>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->


                <div class="row clearfix">
                    <div class="col-lg-5 pr-lg-5">
                        <div class="atf-contact-info">
                            <div class="atf-section-title atf-section-title2">
                                <h2 class="">Our Address</h2>
                            </div>

                            <div class="atf-contact-details">
                                <i class="fa fa-home"></i>
                                <h4>Your Location</h4>
                                <p>United State, Californiya</p>
                                <p>South Africa & London</p>
                            </div>

                            <div class="atf-contact-details">
                                <i class="fa fa-phone"></i>
                                <h4>Mobile Number</h4>
                                <p>+135 478 4442</p>
                                <p>+222 545 4442</p>
                            </div>

                            <div class="atf-contact-details">
                                <i class="fa fa-envelope"></i>
                                <h4>Email Address</h4>
                                <p>demo@example.com</p>
                            </div>
                            <h4 class="">Quick Connect</h4>
                            <div class="atf-footer-social-icon mt-3">
                                <a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
                                <a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
                            </div>
                        </div><!--- END CONTACT -->
                    </div><!--- END COL -->

                    <div class="col-lg-7 col-12 d-block mx-auto my-auto" data-aos="fade-up">
                        <div class="contact">
                            <h4>Send a Message</h4>
                            <form id="contact-form" class="atf-contact-form form" method="POST" action="assets/php/mail.php">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="form_email" placeholder="Your Email" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile" required="required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="message" placeholder="Your Message" required="required"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-left atf-contact-btn">
                                            <button type="submit" value="Submit Now" name="submit" id="submitButton" class="btn atf-themes-btn" data-hover="Send Message" title="Submit Your Message!"><span>Send Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div><!-- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div><!--- END OVERLAY -->
    </section>
    <!-- CONTACT SECTION END-->

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
                        <h5>Quick Links</h5>
                        <ul class="atf-list-menu">
                            <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Get Stared</a></li>
                            <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>It Consultant</a></li>
                            <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>About Us</a></li>
                            <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Need Helps</a></li>
                            <li> <a href="#"><i class="fas fa-chevron-right me-2"></i>Contact Us</a></li>
                        </ul>
                    </div><!--- END COL -->

                    <div class="col-lg-2 col-md-6 col-12 atf-footer-link">
                        <h5>Company</h5>
                        <ul class="atf-list-menu">
                            <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Our Service</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Our Privacy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Update News</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Our Team</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right me-2"></i>Free Consult</a></li>
                        </ul>
                    </div><!--- END COL -->

                    <div class="col-lg-5 col-md-6 col-12 atf-footer-link">
                        <h5>Our Map </h5>
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
<script src="resources/js/jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="resources/bootstrap/js/bootstrap.bundle.js"></script>
<!-- modernizer JS -->
<script src="resources/js/modernizr.custom.js"></script>
<!-- imagesloaded JS -->
<script src="resources/js/imagesloaded.pkgd.js"></script>
<!-- isotope.pkgd JS -->
<script src="resources/js/isotope.pkgd.min.js"></script>
<!-- stellar JS -->
<script src="resources/js/jquery.stellar.min.js"></script>
<!-- owl-carousel min js  -->
<script src="resources/owlcarousel/js/owl.carousel.min.js"></script>
<!-- waypoints js -->
<script src="resources/js/waypoints.min.js"></script>
<!-- jquery.appear js -->
<script src="resources/js/jquery.appear.min.js"></script>
<!-- easing js -->
<script src="resources/js/easing.min.js"></script>
<!-- wow js -->
<script src="resources/js/wow.min.js"></script>
<!-- MeanMenu JS  -->
<script src="resources/js/jquery.meanmenu.js"></script>
 <!-- Nivo slider js -->
<script src="resources/js/swiper.min.js"></script>
<script src="resources/js/lightcase.js"></script>
<!-- ajaxchimp js -->
<script src="resources/js/ajaxchimp.min.js"></script>
<!-- form-contact js -->
<script src="resources/js/form-contact.js"></script>
<!-- main js -->
<script src="resources/js/main.js"></script>
@endsection
