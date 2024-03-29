@extends('layouts.adminhome')
@section('content')
@push('scripts')
    {{-- Barbers profiles from DB NEW ADMINTY --}}
    <div class="page-body">

        {{-- breadcrumbs start --}}
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" style="float: left;"><a href="home"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item active" style="float: left;" aria-current="page">Barbero</li>
                    </ol>
                </nav>
            </ul>
        </div>
        {{-- breadcrumbs end --}}



        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="row mb-3 ">
                    <h1 class="ml-3 text-gray" >Control de Perfil de Barbero</h1>


                    {{-- <div class="page-header-title">
                        //Mofdificar el perfil
                        <div class="d-inline">
                            <h1 class="pl-2" style="color:gray !important;">Control de Información de Barberos</h1>
                            <span>
                                <a class="btn btn-outline-success mb-3 sm ml-3" href="{{ route('barbers.create') }}"
                                    role="button">Agregar</a></span>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="d-flex align-items-start">
                <h3 for="image" class="form-label ml-3 text-gray">
                    Perfil de Barbero
                </h3>
                <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                    title="Ayuda"
                    data-bs-content="Mueva el cursor sobre el perfil de su barbero y seleccione el icono
                        correpondiente a 'usuario' para redirigirle al formulario correspondiente o el icono del 'maletín'
                        para redirigirle a los servicios">
                    <i class="ti-help-alt"></i>
                </small>
            </div>
        </div>
        <!-- Page-header end -->
        <!-- round card start -->
        <div class="row users-card p-3">
    @if (empty($barbers))
        <div class="col-12">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    title: 'No hay información de perfil correspondiente',
                    text: 'Presiona el botón "Crear perfil" para generar tu nuevo perfil',
                    icon: 'info',
                });
            </script>
            <h4 class="ml-1 text-gray">Llena la información de tu perfil presionando este botón</h4>
            <a href="{{ route('barbers.create') }}" class="btn btn-success">Crear perfil</a>
        </div>
    @else
        <div class="col-lg-6 col-xl-3 col-md-6">
            <div class="card rounded-card user-card bg-dark">
                <div class="card-block">
                    <div class="img-hover">
                        <img class="img-fluid img-radius" src="{{ asset($barbers->image) }}" alt="round-img">
                        <div class="img-overlay img-radius">
                            <span>
                                <a href="{{ route('services.index') }}" class="btn btn-outline-primary"
                                    data-popup="lightbox"><i class="icofont icofont-briefcase-alt-1"></i></a>
                                <a href="{{ route('barbers.create', ['userId' => $barbers->id]) }}"
                                    class="btn btn-outline-primary"><i
                                        class="icofont icofont-businessman"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="user-content">
                        <h4 class="">{{ $barbers->name }}</h4>
                        <p class="m-b-0 text-muted">Barbero</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>


        <!-- Round card end -->
    </div>
    <script>
         $(document).ready(function(){
            $('[data-bs-toggle="popover"]').popover();
        });
    </script>
@endsection
