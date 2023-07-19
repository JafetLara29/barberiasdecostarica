@yield('custom-php')
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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('storage/assets/pages/menu-search/css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/pages/multi-step-sign-up/css/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/pages/menu-search/css/component.css') }}">
    {{-- Css Font-Awesome --}}
    <link rel="stylesheet" href="{{ asset('storage/assets/icon/font-awesome/css/font-awesome.min.css') }}">

    <!-- Calendar -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>


    {{-- DataTables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/sp-2.0.2/datatables.min.css" />
    {{-- ############################################################################################################# --}}


    @vite(['resources/js/app.js', 'resources/css/admin.css', 'resources/css/adminlte.min.css','resources/sass/app.scss','resources/css/adminschedule.css'])

    <title>{{ config('app.name', 'Barberiasdecostarica') }}</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        {{-- Navbar --}}
        <nav class="main-header navbar navbar-expand navbar-dark navbar-ligth">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <ion-icon size="large" name="menu"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
        {{-- sidebar --}}

        <aside class="main-sidebar elevation-4 bg-dark">
            <div class="sidebar">
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a class="nav-link py-3" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
                                <p>
                                    {{ Auth::user()->name }}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link py-3 border-bottom" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <ion-icon size="large" name="home"></ion-icon>
                                <p>
                                    @lang('messages.home')
                                </p>

                            </a>
                        </li>



                        {{-- @if ( session('user_type') == "barbershop" )
                            <li class="nav-item">
                                <a href="{{ route('barbers.createUser') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="person-add-outline"></ion-icon>
                                    <p>
                                        Administrar usuarios
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if ( session('user_type') == "barbershop" )
                            <li class="nav-item">
                                <a href="{{ route('barbershops.create') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="business-outline"></ion-icon>
                                    <p>
                                        Barbería
                                    </p>
                                </a>
                            </li>
                        @endif --}}
                        {{-- @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ route('barbers.index') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="people-circle-outline"></ion-icon>
                                    <p>
                                        Barberos
                                    </p>
                                </a>
                            </li>
                        @endif --}}

                                {{-- Validamos el tipo de usuario barbería o barber --}}

                        @if ( session('user_type') == "barbershop" )
                        <li class="nav-item">
                            <a href="{{ route('barbers.createUser') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <ion-icon size="large" name="person-add-outline"></ion-icon>
                                <p>
                                    @lang('messages.manage_users')
                                </p>

                            </a>
                        </li>
                    @endif



                        @if ( session('user_type') == "barbershop" )
                            <li class="nav-item">
                                <a href="{{ route('barbershops.create') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="business-outline"></ion-icon>
                                    <p>
                                        @lang('messages.barbershop')
                                    </p>
                                </a>
                            </li>
                        @endif


                        @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ route('barbers.index') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="people-circle-outline"></ion-icon>
                                    <p>
                                        @lang('messages.barbers')
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ route('barbers.schedule') }}" class="nav-link py-3 border-bottom" title="Citas" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <ion-icon size="large" name="calendar"></ion-icon>

                                    {{-- <ion-icon size="large" name="albums"></ion-icon> --}}
                                    <p>
                                        @lang('messages.scheduled_appointments')
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ route('citations.inbox') }}" class="nav-link py-3 border-bottom" title="Bandeja de entrada" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                    <ion-icon size="large" name="mail-unread"></ion-icon>

                                    {{-- <ion-icon size="large" name="fitness"></ion-icon> --}}

                                    <p>
                                        @lang('messages.incoming_appointments')
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ url('income') }}" class="nav-link py-3 border-bottom" title="Ingresos" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                    <ion-icon size="large" name="cash"></ion-icon>
                                    <p>
                                        @lang('messages.incomes')
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if ( session('user_type') == "barber" )
                            <li class="nav-item">
                                <a href="{{ route('servicesform') }}" class="nav-link py-3 border-bottom" title="Servicios" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                    <ion-icon size="large" name="briefcase"></ion-icon>
                                    <p>
                                        @lang('messages.services')
                                    </p>
                                </a>
                            </li>
                        @endif




                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="nav-link py-3 border-bottom text-left" type="submit">
                                    <ion-icon size="large" name="exit"></ion-icon>
                                    <p>
                                        @lang('messages.logout')
                                    </p>
                                </button>


                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>










        @if (session()->has('success'))
        <script>
            Toastify({
                text: "¡{{ session()->get('success') }}!",
                duration: 5000,
                gravity: "top",
                position: "center",
                style: {
                    background: "linear-gradient(to right, #00b09b, greenyellow)",
                },

            }).showToast();
        </script>
        @endif
        {{-- Main app container --}}
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <main class="content-wrapper bg-darkbg scroll-area">
            {{-- Validar si hay algo en la bolsa de errores, se llena cuando se proveen datos incorrectos etc en formularios --}}
            @if(isset($errors) && $errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            @yield('content')
        </main>

        @vite(['resources/js/adminlte.min.js']);
        {{-- Icons --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        {{-- Animations --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        {{-- <script type="text/javascript" src="{{ asset('/storage/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"> --}}

        {{-- Datatables --}}
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/sp-2.0.2/datatables.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        {{-- Lugar donde se colocaran los scripts que especifiquemos para cada vista en especifico --}}
        @yield('custom-scripts')

</body>

</html>

