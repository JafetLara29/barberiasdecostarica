<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        {{-- Animation css --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        {{-- Scripts 'resources/sass/app.scss',--}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css', 'resources/css/search.css', 'resources/js/script.js'])
 
</head>
    <body>
        <!-- header section starts  -->
        <header class="header">

            <a href="#" class="logo">
                <img src="{{asset('storage/welcome_images/barberLogo.png')}}" alt="">
            </a>

            <nav class="navbar">
                @if(Route::has('search'))
                    <a href="/#home">Inicio</a>
                    <a href="/#about">Nosotros</a>
                    <a href="/#services">Servicios</a>
                    <a href="/#comunity">Comunidad</a>
                    <a href="/#review">Reseñas</a>
                    <a href="/#contact">Contacto</a>
                    <a href="/#blogs">Blogs</a>
                    <a href="{{ route('search') }}"><i class="fas fa-search-location"></i> Buscar barbería</a>
                    <a href="{{ route('login') }}"><i class="fas fa-user"></i> Ingresar</a>
                @else
                    <a href="#home">Inicio</a>
                    <a href="#about">Nosotros</a>
                    <a href="#services">Servicios</a>
                    <a href="#comunity">Comunidad</a>
                    <a href="#review">Reseñas</a>
                    <a href="#contact">Contacto</a>
                    <a href="#blogs">Blogs</a>
                    <a href="{{ route('search') }}"><i class="fas fa-search-location"></i> Buscar barbería</a>
                    <a href="{{ route('login') }}"><i class="fas fa-user"></i> Ingresar</a>
                @endif
            </nav>

            <div class="icons">
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
        </header>
        <!-- header section ends -->
        

        @yield('content')

        <!-- footer section starts  -->
        <section class="footer">

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>

            <div class="credit">TeamCode</div>

        </section>
        <!-- footer section ends -->

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>