<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    {{-- Animation css --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- ############################################################################################################# --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Css old Vite --}}

    <link rel="stylesheet" href="{{ asset('storage/assets/pages/multi-step-sign-up/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/pages/multi-step-sign-up/css/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/icofont/css/icofont.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('storage/assets/pages/menu-search/css/component.css') }}"> --}}

    {{-- Css Font-Awesome --}}
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/font-awesome/css/font-awesome.min.css') }}">

    @vite(['resources/js/app.js', 'resources/sass/app.scss', 'resources/css/auth.css'])




    <title>{{ config('app.name', 'Barberiasdecostarica') }}</title>
</head>

<body>

        <main>
            @yield('content')
        </main>

    {{-- scripts ADMINTY --}}

    <script type="text/javascript" src="{{ asset('/storage/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/storage/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('/storage/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script> --}}
    {{-- <script type="text/javascript" src="{{ asset('/storage/bower_components/popper.js/dist/umd/popper.min.js') }}">
    </script> --}}
    <script text="text/javascript" src="{{ asset('/storage/assets/js/common-pages.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/storage/assets/pages/multi-step-sign-up/js/main.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('/storage/bower_components/modernizr/modernizr.js') }}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('/storage/bower_components/i18next/i18next.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/storage/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('/storage/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('/storage/bower_components/jquery-i18next/jquery-i18next.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('/storage/assets/js/pcoded.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


</body>

</html>
