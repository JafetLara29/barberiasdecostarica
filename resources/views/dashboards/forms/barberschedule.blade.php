@extends('layouts.adminhome')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>

    <body>
        <?php // include "../Shared/adminnavbar.php";$bussiness = new ScheduleBusiness();
        ?>
        <!-- Contenedor del calendario -->
        <div class="" id="calendar-container">

            {{-- breadcrumbs start --}}
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" style="float: left;"><a href="home"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item active" style="float: left;" aria-current="page">Citas</li>
                        </ol>
                    </nav>
                </ul>
            </div>
            {{-- breadcrumbs end --}}


            <div class="d-flex align-items-start">
                <h3 for="image" class="form-label ml-3 text-gray text-center">
                    Citas Agendadas
                </h3>
                <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                    title="Ayuda"
                    data-bs-content="Clickeé sobre alguno de los dias del calentario para verificar si existe una cita agendada , la cual podrá aceptar o rechazar según lo requiera.">
                    <i class="ti-help-alt"></i>
                </small>
            </div>
            <div id="calendar">

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">


                    <div class="modal-body" id="modal-body">
                        <!-- Aquí se agregará la tabla generada por la consulta AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-outline-success" data-dismiss="modal">Cerrar</button>

                    </div>

                </div>
            </div>
        </div>

        {{-- Toastify miedo del yimbon --}}
        <!-- Toast -->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <!-- Toasts -->
            <!-- Aquí se agregarán los toasts dinámicamente con JavaScript -->
        </div>

    </body>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover();
        });
        let view = "admin";
    </script>
    @vite(['resources/js/schedules.js'])
@endsection
