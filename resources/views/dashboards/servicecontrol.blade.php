@extends('layouts.adminhome')
@section('content')
    <style>
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
    </style>


    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-header-title">
                    <h1 class="container-fluid mt-0">Control de Servicios</h1>
                    <p class="pt-1">Aquí puedes agregar, visualizar y eliminar los servicios disponibles al público</p>
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
    </div>


    <script>
        var tbody = $("#services-table");


        $(document).ready(function() {
            loadServices();
        });

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
                    console.log(services);

                    // Se vacía la tabla para evitar duplicados
                    tbody.empty(); // Vacía solo los datos de la tabla

                    // Si se recibieron servicios en la respuesta, se recorren para crear las filas de la tabla
                    if (services.length > 0) {

                        services.forEach(service => {

                            // Se crea una fila de la tabla por cada servicio recibido
                            var row = `
                                <tr id="row-${service.id}">
                                    <td>${service.id}</td>
                                    <td>${service.description}</td>
                                    <td>${service.price}</td>
                                    <td>${service.date_service}</td>
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
                        // Si no se recibieron servicios en la respuesta, se muestra un mensaje en la tabla
                        var row = `
                    <tr>
                        <td colspan="4" class="text-center">No hay servicios registrados</td>
                    </tr>
                `;
                        // Se agrega la fila a la tabla
                        tbody.append(row);
                    }
                },
                error: function(xhr) {
                    // Si la petición falla, se muestra una notificación de error utilizando la librería Toastify
                    Toastify({
                        text: "Ha ocurrido un error al cargar los servicios",
                        duration: 5000,
                        gravity: "top",
                        position: "center",
                        style: {
                            background: "linear-gradient(to right, #ffcccc, #ff9999)",
                            color: "black",
                            fontWeight: "bold",
                            boxShadow: "0 4px 8px rgba(0,0,0,0.1)",
                        },
                    }).showToast();
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
                    Toastify({
                        text: "Servicio eliminado exitosamente",
                        duration: 5000,
                        gravity: "top",
                        position: "center",
                        style: {
                            background: "linear-gradient(to right, #a8dba8, #7bc87b)", // Colores de fondo en degradado en tonos de verde
                            color: "black", // Color del texto en negro para mayor contraste
                            fontWeight: "bold", // Negrita en el texto
                            boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                        },
                    }).showToast();
                },
                error: function(xhr) {
                    Toastify({
                        text: "Ha ocurrido un error al eliminar el servicio",
                        duration: 5000,
                        gravity: "top",
                        position: "center",
                        style: {
                            background: "linear-gradient(to right, #ffcccc, #ff9999)", // Colores de fondo en degradado en tonos de rojo
                            color: "black", // Color del texto en negro para mayor contraste
                            fontWeight: "bold", // Negrita en el texto
                            boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                        },
                    }).showToast();
                }
            });
        }
    </script>
@endsection
