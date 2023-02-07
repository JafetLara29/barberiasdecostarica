<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    {{-- Styles --}}
    @vite([
        'resources/sass/app.scss',
        'resources/assets/icon/themify-icons/themify-icons.css', 
        'resources/assets/icon/icofont/css/icofont.css',
        'resources/assets/pages/flag-icon/flag-icon.min.css',
        'resources/assets/pages/menu-search/css/component.css',
        'resources/assets/pages/multi-step-sign-up/css/reset.min.css',
        'resources/assets/pages/multi-step-sign-up/css/style.css',
        'resources/assets/css/style.css'
        ])

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>
<body>
    <div id="app" class="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
    @vite([
        "resources/bower_components/jquery/dist/jquery.min.js",
        "resources/bower_components/jquery-ui/jquery-ui.min.js",
        "resources/bower_components/popper.js/dist/umd/popper.min.js",  
        "resources/bower_components/bootstrap/dist/js/bootstrap.min.js",
        "resources/bower_components/jquery-slimscroll/jquery.slimscroll.js",
        "resources/bower_components/modernizr/modernizr.js",
        "resources/bower_components/modernizr/feature-detects/css-scrollbars.js",
        "resources/assets/pages/multi-step-sign-up/js/main.js",
        "resources/bower_components/i18next/i18next.min.js",
        "resources/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js",
        "resources/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js",
        "resources/bower_components/jquery-i18next/jquery-i18next.min.js",
        "resources/assets/js/common-pages.js",
    ])
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>
