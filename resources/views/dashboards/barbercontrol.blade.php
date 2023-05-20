@extends('layouts.adminhome')
@section('content')
    {{-- Barbers profiles from DB NEW ADMINTY --}}
    <div class="page-body">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="row mb-3 ">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h1>Control de Barberos</h1>
                            <span>
                                <a class="btn btn-outline-success mb-3 sm ml-3" href="{{ route('barbers.create') }}"
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
                            <li class="breadcrumb-item" style="float: left;"><a
                                    href="{{ route('barbers.profile') }}">Barberos</a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a
                                    href="{{ route('barbers.index') }}">Perfiles</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <!-- round card start -->
        <div class="row users-card">
            @foreach ($barbers as $barber)
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-radius" src="{{ asset($barber->image) }}" alt="round-img">
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
                                <h4 class="">{{ $barber->name }}</h4>
                                <p class="m-b-0 text-muted">Barbero</p>
                            </div>
                        </div>

                        {{-- Boton de eliminar barberos --}}
                        <form method="POST" action="{{ route('barbers.destroy', ['barber' => $barber->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-outline-danger sm ml-3"
                                onclick="confirmDelete()">Eliminar</button>
                        </form>

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            function confirmDelete() {
                                Swal.fire({
                                    title: '¿Estás seguro de que quieres eliminar esto?',
                                    text: "Esta acción no se puede deshacer.",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Sí, eliminar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // El usuario ha confirmado, envía el formulario
                                        document.querySelector('form').submit();
                                        window.location.href = "{{ route('barbers.destroy', ['barber' => $barber->id]) }}";
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Round card end -->
    </div>
@endsection
