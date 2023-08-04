@extends('layouts.adminhome')
@section('content')
    {{-- <style>
        body {
            background-color: #F9E0D9;
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
            color: wheat;
            background-color: #FFD5C2;
            border-color: wheat;
        }

        .btn-primary {
            background-color: #5C3D2E;
            border-color: #5C3D2E;
        }

        .btn-primary:hover {
            background-color: #9D6E5F;
            border-color: #9D6E5F;
        }
    </style> --}}



    {{-- breadcrumbs start --}}
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item"><a href="addServices">Servicios</a></li>
            <li class="breadcrumb-item active" aria-current="page">AgregarServicions</li>
        </ol>
    </nav>
    {{-- breadcrumbs end --}}
    <div style="padding: 20px;">
        <div class="d-flex align-items-start">
            <h3 for="image" class="form-label ml-3 text-gray text-center">
                Agregar Servicios
            </h3>
            <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Ayuda"
                data-bs-content="En el selector se le ofrecen unas opciones preestablecidas sobre algunos posibles servicios a ofrecer como barbero en su perfil. Si desea especificar manualmente , seleccione la opcion de 'otros' para hablitarle un campo especifico para el servicio que desea brindar ">
                <i class="ti-help-alt"></i>
            </small>
        </div>

        <form action="/serviceStore" method="POST">
            @csrf
            <!-- Token de seguridad Laravel -->
            <div class="form-group">
                <label for="tipo-servicio" class="text-white">Tipo de servicio:</label>
                <select class="form-control" id="tipo-servicio" name="tipo-servicio">
                    <option value="corte-cabello">Corte de cabello</option>
                    <option value="afeitado">Afeitado</option>
                    <option value="corte-barba">Corte de barba</option>
                    <option value="corte-cabello-afeitado">Corte de cabello + afeitado</option>
                    <option value="corte-cabello-barba">Corte de cabello + corte de barba</option>
                    <option value="Retoques-cabello&barba">Retoques de Cabello o barba</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <div class="form-group" id="otro-servicio" style="display:none;">
                <label for="tipo-servicio-otro" class="text-white">Tipo de servicio:</label>
                <input type="text" class="form-control" id="tipo-servicio-otro" name="tipo-servicio-otro">
            </div>
            <div class="form-group">
                <label style="color:wheat!important" for="precio">Precio:</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar servicio</button>
        </form>

        <!-- Toast container -->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <!-- Toast -->
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000"
                style="min-width: 200px;">
                <div class="toast-header bg-dark text-white">
                    <strong class="mr-auto">Sistema</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body bg-light" id="toastContent" style="color: #343a40;">
                    <!-- El contenido del toast se actualizará dinámicamente con JavaScript -->
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.toast').toast('hide'); // Ocultar el toast al cargar la página

            $('.toast .close').on('click', function() {
                $(this).closest('.toast').toast('hide');
            });
            $(document).ready(function() {
                $('[data-bs-toggle="popover"]').popover();
            });
            // Función para manejar el cambio de opción en el select del tipo de servicio
            $("#tipo-servicio").change(function() {
                if ($(this).val() == "otros") {
                    $("#otro-servicio").show();
                } else {
                    $("#otro-servicio").hide();
                }
            });

            $("form").submit(function(event) {
                event.preventDefault(); // Prevenir el envío del formulario

                // Obtener el valor del tipo de servicio seleccionado
                var tipoServicio = $("#tipo-servicio").val();

                // Validar si se seleccionó algún tipo de servicio
                if (tipoServicio == null || tipoServicio === "") {
                    showToast("Por favor seleccione un tipo de servicio");
                    return false;
                }

                // Validar si se seleccionó la opción "otros" y se ingresó el tipo de servicio
                if (tipoServicio == "otros") {
                    var otroServicio = $("#tipo-servicio-otro").val().trim();
                    if (otroServicio === "") {
                        showToast("Por favor especifique el tipo de servicio");
                        return false;
                    }
                }

                // Obtener el valor del precio y la fecha
                var precio = $("#precio").val().trim();

                // Validar si se ingresó el precio y la fecha
                if (precio === "") {
                    showToast("Por favor ingrese el precio del servicio");
                    return false;
                }

                // Llamar a la función ServicesSave si todo está validado correctamente
                ServicesSave();
            });

            function showToast(message) {
                var toast = $('.toast');
                var toastContent = $('.toast-body');
                toastContent.html(message);
                toastContent.css({
                    background: 'linear-gradient(to right, #f9d9bc, #f5cda1)',
                    color: 'black',
                    'font-weight': 'bold',
                    'box-shadow': '0 4px 8px rgba(0,0,0,0.1)'
                });
                toast.toast('show');
            }

            function ServicesSave() {
                var tipoServicio = $("#tipo-servicio").val();
                if (tipoServicio == "otros") {
                    tipoServicio = $("#tipo-servicio-otro").val().trim();
                }
                var precio = $("#precio").val().trim();

                $.ajax({
                    type: 'POST',
                    url: '/serviceStore',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        tipo_servicio: tipoServicio,
                        precio: precio,
                    },
                    success: function(data) {
                        var toast = $('.toast');
                        var toastContent = $('.toast-body');
                        toastContent.html("Servicio guardado exitosamente");
                        toastContent.css({
                            background: 'linear-gradient(to right, #a8dba8, #7bc87b)',
                            color: 'black',
                            'font-weight': 'bold',
                            'box-shadow': '0 4px 8px rgba(0,0,0,0.1)'
                        });
                        toast.toast('show');

                        $("#tipo-servicio").val("");
                        $("#otro-servicio").hide();
                        $("#tipo-servicio-otro").val("");
                        $("#precio").val("");
                    },
                    error: function(xhr) {
                        var toast = $('.toast');
                        var toastContent = $('.toast-body');
                        toastContent.html("Ha ocurrido un error al guardar el servicio");
                        toastContent.css({
                            background: 'linear-gradient(to right, #ffcccc, #ff9999)',
                            color: 'black',
                            'font-weight': 'bold',
                            'box-shadow': '0 4px 8px rgba(0,0,0,0.1)'
                        });
                        toast.toast('show');
                    }
                });
            }
        });
    </script>
@endsection
