@extends('layouts.adminhome')
@section('content')
    {{-- <style>
        body {
            background-color: #F9E0D9;
            overflow-y: scroll;
        }

        .form-container {
            background-color: #F6BBB4;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-image: linear-gradient(to bottom right, #F6BBB4, #FFD5C2);
        }

        h2 {
            color: #5C3D2E;
        }

        label {
            color: #5C3D2E;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .form-control {
            border-color: #5C3D2E;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #C97B6D;
        }

        .input-group-text {
            color: #5C3D2E;
            background-color: #FFD5C2;
            border-color: #5C3D2E;
        }

        .btn-primary {
            background-color: #5C3D2E;
            border-color: #5C3D2E;
        }

        .btn-primary:hover {
            background-color: #9D6E5F;
            border-color: #9D6E5F;
        }

        hr {
            border-top: 1px dashed #5C3D2E;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style> --}}


    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-header-title">
                    <div class="d-flex align-items-start">
                        <h1 for="image" class="form-label ml-3 text-gray text-center">
                            Control de Servicios
                        </h1>
                        <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                            title="Ayuda"
                            data-bs-content="Acá puede visualizar los diferentes servicios registrados en su perfil. Seleccione el botón de 'Agregar servicio' para redirigirle a un formulario donde puede añadir fácilmente los servicios relacionados a su perfil de barbero.">
                            <i class="ti-help-alt"></i>
                        </small>
                    </div>
                    <p class="pt-1 text-gray">Aquí puedes agregar, visualizar y eliminar los servicios
                        disponibles al público</p>
                    <a href="{{ Route('show.service.list') }}" class="btn btn-primary ml-3 mb-3 mt-3">Agregar servicio</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive shadow px-3">
                <table class="table table-striped">
                    <thead style="background-color:#f8c1b8;">
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="services-table">
                        {{-- informacion de la tabla proveniente del ajax --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Toastify miedo del yimbon --}}
    <!-- Toast -->
    <div class="toast rounded-1" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000"
        style="position: fixed; bottom: 1rem; right: 1rem;" id="myToast">
        <div class="toast-header" style="background-color: #343a40; color: #ffffff;">
            <strong class="mr-auto">Sistema</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body bg-light" id="toastContent" style="color: #343a40;">
            <!-- El contenido del toast se actualizará dinámicamente con JavaScript -->
        </div>
    </div>


    <script>
        // Functions related to the new notification systems , bootstrap 4 toasts for compatibility
        $(document).ready(function() {
            $('.toast').toast('hide'); // Mostrar el toast al cargar la página

            $('.toast .close').on('click', function() {
                $(this).closest('.toast').toast('hide');
            });
        });
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover();
        });



        var tbody = $("#services-table");


        $(document).ready(function() {
            loadServices();
        });

        function showToast(message) {
            var toast = $('.toast');
            var toastContent = $('.toast-body');
            toastContent.html(message);
            $('#toastContent').css({
                background: "linear-gradient(to right, #a8dba8, #7bc87b)",
                color: "black",
                fontWeight: "bold",
                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
            });
            toast.toast('show');
        }

        function loadServices() {
            // Se realiza una petición AJAX al servidor para obtener los servicios
            $.ajax({
                type: "GET",
                url: "/loadServices",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    let services = data.data;

                    // Se vacía la tabla para evitar duplicados
                    tbody.empty(); // Vacía solo los datos de la tabla

                    // Si se recibieron servicios válidos en la respuesta, se recorren para crear las filas de la tabla
                    if (services && services.length > 0) {
                        services.forEach(service => {
                            // Se crea una fila de la tabla por cada servicio recibido
                            var row = `
                        <tr id="row-${service.id}">
                            <td style="color:wheat !important">${service.id}</td>
                            <td style="color:wheat !important">${service.description}</td>
                            <td style="color:wheat !important">${service.price}</td>
                            <td style="color:wheat !important">${service.date_service}</td>
                            <td>
                                <button class="btn btn-primary" onclick="deleteService(${service.id})">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    `;
                            // Se agrega la fila a la tabla
                            tbody.append(row);
                        });
                    } else {
                        // Si no se recibieron servicios válidos en la respuesta, se muestra un mensaje en la tabla
                        var row = `
                    <tr>
                        <td colspan="4" style="color:wheat !important" class="text-center">No hay servicios registrados</td>
                    </tr>
                `;
                        // Se agrega la fila a la tabla
                        tbody.append(row);
                    }
                },
                error: function(xhr) {
                    // Si la petición falla, se muestra una notificación de error utilizando el Toast de Bootstrap 4
                    showToast("Ha ocurrido un error al cargar los servicios");
                }
            });
        }


        function deleteService(id) {
            $.ajax({
                url: `/deleteServices/${id}`,
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: id
                },
                success: function(data) {
                    loadServices();
                    showToast("Servicio eliminado exitosamente", "success");
                },
                error: function(xhr) {
                    showToast("Ha ocurrido un error al eliminar el servicio", "error");
                }
            });
        }
    </script>
@endsection
