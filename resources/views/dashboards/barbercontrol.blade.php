@extends('layouts.adminhome')
@section('content')

    {{-- Barbers profiles from DB OLD --}}
    <!--
                    <div class="scroll-area pb-5">

                        <div class="card login-card">

                            <div class="row align-items-center p-3 d-flex justify-content-center flex-wrap">
                                {{-- Card --}}
                                <div class="card barber-card m-2 p-2 shadow">
                                    <div class="img-container rounded-circle d-flex justify-content-center">
                                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                                    </div>
                                    <div class="text-center">
                                        Rolbin Jafet Lara Lopez
                                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                                    </div>
                                </div>
                                {{-- Card --}}
                                <div class="card barber-card m-2 p-2 shadow">
                                    <div class="img-container rounded-circle d-flex justify-content-center">
                                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                                    </div>
                                    <div class="text-center">
                                        Rolbin Jafet Lara Lopez
                                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                                    </div>
                                </div>
                                {{-- Card --}}
                                <div class="card barber-card m-2 p-2 shadow">
                                    <div class="img-container rounded-circle d-flex justify-content-center">
                                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                                    </div>
                                    <div class="text-center">
                                        Rolbin Jafet Lara Lopez
                                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                                    </div>
                                </div>
                                {{-- Card --}}
                                <div class="card barber-card m-2 p-2 shadow">
                                    <div class="img-container rounded-circle d-flex justify-content-center">
                                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                                    </div>
                                    <div class="text-center">
                                        Rolbin Jafet Lara Lopez
                                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                                    </div>
                                </div>
                                {{-- Card --}}
                                <div class="card barber-card m-2 p-2 shadow">
                                    <div class="img-container rounded-circle d-flex justify-content-center">
                                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                                    </div>
                                    <div class="text-center">
                                        Rolbin Jafet Lara Lopez
                                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>-->
    {{-- Barbers profiles from DB NEW ADMINTY --}}
    <div class="page-body">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8 ">
                    <div class="page-header-title">

                        <div class="d-inline">
                            <h4>Control de Barberos</h4>
                            <span>
                                <a class="btn btn-outline-success mb-3" href="{{ route('barbers.create') }}"
                                    role="button">Agregar</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-5">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{ route('barbers.index') }}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('barbers.profile') }}">Barberos</a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('barbers.index') }}">Perfiles</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <!-- round card start -->

        <div class="row users-card">
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="card rounded-card user-card">

                    <div class="card-block">
                        <div class="img-hover">
                            <img class="img-fluid img-radius"
                                src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg"
                                alt="round-img">
                            <div class="img-overlay img-radius">
                                <span>
                                    <a href="{{ route('services.index') }}" class="btn btn-outline-primary"
                                        data-popup="lightbox"><i class="icofont icofont-briefcase-alt-1"></i></a>
                                    <a href="{{ route('barbers.profile') }}" class="btn btn-outline-primary"><i
                                            class="icofont icofont-businessman"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="user-content">
                            <h4 class="">Cedric Kelly</h4>
                            <p class="m-b-0 text-muted">Network engineer</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="card rounded-card user-card">
                    <div class="card-block">
                        <div class="img-hover">
                            <img class="img-fluid img-radius"
                                src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg"
                                alt="round-img">
                            <div class="img-overlay img-radius">
                                <span>
                                    <a href="{{ route('services.index') }}" class="btn btn-outline-primary"
                                        data-popup="lightbox"><i class="icofont icofont-briefcase-alt-1"></i></a>
                                    <a href="{{ route('barbers.profile') }}" class="btn btn-outline-primary"><i
                                            class="icofont icofont-businessman"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="user-content">
                            <h4 class="">Howard Hatfield</h4>
                            <p class="m-b-0 text-muted">UX/UI designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="card rounded-card user-card">
                    <div class="card-block">
                        <div class="img-hover">
                            <img class="img-fluid img-radius"
                                src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg"
                                alt="round-img">
                            <div class="img-overlay img-radius">
                                <span>
                                    <a href="{{ route('services.index') }}" class=" btn btn-outline-primary"
                                        data-popup="lightbox"><i class="icofont icofont-briefcase-alt-1"></i></a>
                                    <a href="{{ route('barbers.profile') }}" class=" btn btn-outline-primary"><i
                                            class="icofont icofont-businessman"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="user-content">
                            <h4 class="">Jenette Caldwell</h4>
                            <p class="m-b-0 text-muted">SEO specialist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6">
                <div class="card rounded-card user-card">
                    <div class="card-block">
                        <div class="img-hover">
                            <img class="img-fluid img-radius"
                                src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg"
                                alt="round-img">
                            <div class="img-overlay img-radius">
                                <span>
                                    <a href="{{ route('services.index') }}" class="btn btn-outline-primary"
                                        data-popup="lightbox"><i class="icofont icofont-briefcase-alt-1"></i></a>
                                    <a href="{{ route('barbers.profile') }}" class="btn btn-outline-primary"><i
                                            class="icofont icofont-businessman"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="user-content">
                            <h4 class="">Hermione Butler</h4>
                            <p class="m-b-0 text-muted">Chief officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Round card end -->
    </div>

    <script>
        var table;
        // Al levantar la vista ocultamos el form de editar
        document.getElementById('edit-module-form').style.setProperty('display', 'none');
        $(document).ready(function() {
            // Obtenemos los registro y los ponemos en la tabla
            // getAllModules();
        });

        function getAllModules() {
            table = $('#modulesTable').DataTable({
                dom: 'Bfrtip',
                stateSave: true,
                pagingType: 'full_numbers',
                scrollY: '200px',
                scrollCollapse: true,
                language: {
                    lengthMenu: 'Mostrando _MENU_ filas por página',
                    zeroRecords: 'Nada que mostrar',
                    info: 'Página #_PAGE_ de _PAGES_',
                    infoEmpty: 'No hay coincidencias',
                    search: 'Buscar',
                    infoFiltered: '(Filtrado de _MAX_ registros)',
                },
                buttons: [
                    // 'copy',
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'excel',
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'pdf',
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'print',
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis',
                ],
                columnDefs: [{
                    // targets: -1,
                    visible: false
                }]
            });
        }
    </script>
@endsection
