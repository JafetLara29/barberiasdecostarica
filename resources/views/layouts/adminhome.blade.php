<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Alerts --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    {{-- Animation css --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{--#############################################################################################################--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- Scripts --}}
    {{-- @vite(["resources/bower_components/jquery/dist/jquery.min.js"]) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Font Awesome -->
    @vite(['resources/assets/icon/font-awesome/css/font-awesome.min.css'])

    {{-- Styles --}}
    @vite([
        'resources/assets/css/sweetalert.css',
        'resources/bower_components/bootstrap/dist/css/bootstrap.min.css',
        "resources/assets/icon/feather/css/feather.css",
        "resources/assets/css/style.css",
        "resources/assets/icon/themify-icons/themify-icons.css",
        "resources/assets/icon/icofont/css/icofont.css",
        "resources/assets/pages/advance-elements/css/bootstrap-datetimepicker.css",
        "resources/bower_components/bootstrap-daterangepicker/daterangepicker.css",
        "resources/bower_components/datedropper/datedropper.min.css"

        //"resources/assets/css/jquery.mCustomScrollbar.css",
    ])
    {{-- DataTables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/sp-2.0.2/datatables.min.css"/>
    {{--#############################################################################################################--}}


    @vite([
    //'resources/sass/app.scss',
    //'resources/js/app.js',
    'resources/css/admin.css',
    'resources/css/adminlte.min.css',
    'resources/js/adminlte.min.js'
    ])

    <title>{{ config('app.name', 'Barberiasdecostarica') }}</title>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        {{-- Navbar --}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"> <ion-icon size="large" name="menu"></ion-icon></a>
                </li>
            </ul>
        </nav>
        {{-- sidebar --}}
        <aside class="main-sidebar elevation-4 bg-light">
            <div class="sidebar">
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a class="nav-link py-3" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
                                <p>
                                    {{Auth::user()->name}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link py-3 border-bottom" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <ion-icon size="large" name="home"></ion-icon>
                                <p>
                                    Inicio
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('barbershop.create') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <ion-icon size="large" name="business-outline"></ion-icon>
                                <p>
                                    Barbería
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('barbers.index') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <ion-icon size="large" name="people-circle-outline"></ion-icon>
                                <p>

                                    Barberos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <ion-icon size="large" name="calendar"></ion-icon>
                                {{-- <ion-icon size="large" name="albums"></ion-icon> --}}
                                <p>
                                    Citas agendadas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('citations.inbox') }}" class="nav-link py-3 border-bottom" title="Bandeja de entrada" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <ion-icon size="large" name="mail-unread"></ion-icon>
                                {{-- <ion-icon size="large" name="fitness"></ion-icon> --}}
                                <p>
                                    Citas entrantes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link py-3 border-bottom" title="Producción de leche" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <ion-icon size="large" name="cash"></ion-icon>
                                <p>
                                    Ingresos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link py-3 border-bottom" title="Datos" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                <ion-icon size="large" name="bar-chart"></ion-icon>
                                <p>
                                    Datos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-light p-0" type="submit">
                                    <ion-icon size="large" name="exit"></ion-icon>
                                    <p>
                                        Salir
                                    </p>
                                </button>
                                {{-- <input type="submit" value="Salir"/> --}}
                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        @if (session()->has("success"))
            <script>
                Toastify({
                    text: "¡{{ session()->get("success") }}!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: "linear-gradient(to right, #00b09b, greenyellow)",
                    },

                }).showToast();
            </script>
        @endif
        {{-- Validar si hay algo en la bolsa de errores, se llena cuando se proveen datos incorrectos etc en formularios --}}
        @if (isset($errors) && $errors->any())
                @foreach ($errors->all() as $error)
                    {{-- <li>{{$error}}</li> --}}
                    <script>
                        Toastify({
                            text: "{{$error}}",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, gray, greenyellow)",
                            },

                        }).showToast();
                    </script>
                @endforeach
        @endif
        {{-- Main app container --}}
        <main class="content-wrapper p-3">
            @yield('content')
        </main>

        {{-- Icons --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        {{-- Animations --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
{{-- ##################################################################################################################### --}}
@vite([
        "resources/bower_components/jquery-ui/jquery-ui.min.js",
        "resources/bower_components/moment/src/moment.js",
        'resources/js/app.js',
        // "resources/bower_components/bootstrap/dist/js/bootstrap.min.js",
         "resources/bower_components/popper.js/dist/umd/popper.min.js",
        //"resources/bower_components/jquery-slimscroll/jquery.slimscroll.js",
        // "resources/bower_components/modernizr/modernizr.js",
       // "resources/bower_components/chart.js/dist/Chart.js",
        // "resources/assets/pages/widget/amchart/amcharts.js",
        // "resources/assets/pages/widget/amchart/serial.js",
        // "resources/assets/pages/widget/amchart/light.js",
        //"resources/assets/js/jquery.mCustomScrollbar.concat.min.js",
        // "resources/assets/js/SmoothScroll.js",

        // "resources/assets/js/sweetalert.js",
        //"resources/assets/js/modal.js",

        // "resources/assets/js/modalEffects.js",
        // "resources/assets/js/classie.js",
        // "resources/assets/js/pcoded.min.js",
        //"resources/assets/js/vartical-layout.min.js",
        //"resources/assets/pages/dashboard/custom-dashboard.js",
        //"resources/assets/js/script.js",
        "resources/assets/pages/ckeditor/ckeditor.js",
        "resources/assets/pages/user-profile.js",
        "resources/assets/pages/ckeditor/ckeditor.js",
       // "resources/assets/pages/ckeditor/ckeditor-custom.js",
        "resources/assets/pages/advance-elements/moment-with-locales.min.js",
        "resources/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
        "resources/assets/pages/advance-elements/bootstrap-datetimepicker.min.js",
        "resources/bower_components/bootstrap-daterangepicker/daterangepicker.js",
        "resources/bower_components/datedropper/datedropper.min.js"

    ])


    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/sp-2.0.2/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

{{-- ##################################################################################################################### --}}
</body>
</html>
