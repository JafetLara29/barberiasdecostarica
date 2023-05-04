@extends('layouts.adminhome')
@section('content')

<style>
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
</style>



<div style="padding: 20px;">
    <h2>Agregar servicios</h2>
    <p>Por favor completa el siguiente formulario para agregar un servicio brindado por la barbería.</p>

    <form action="/guardar-servicio" method="POST">
        @csrf
        <!-- Token de seguridad Laravel -->
        <div class="form-group">
            <label for="tipo-servicio">Tipo de servicio:</label>
            <select class="form-control" id="tipo-servicio" name="tipo-servicio">
                <option value="corte-cabello">Corte de cabello</option>
                <option value="afeitado">Afeitado</option>
                <option value="corte-barba">Corte de barba</option>
                <option value="corte-cabello-afeitado">Corte de cabello + afeitado</option>
                <option value="corte-cabello-barba">Corte de cabello + corte de barba</option>
                <option value="Retoques-cabello&barba">Retoques de  Cabello o barba</option>
                <option value="otros">Otros</option>
            </select>
        </div>
        <div class="form-group" id="otro-servicio" style="display:none;">
            <label for="tipo-servicio-otro">Tipo de servicio:</label>
            <input type="text" class="form-control" id="tipo-servicio-otro" name="tipo-servicio-otro">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar servicio</button>
    </form>
</div>

<script>
    document.getElementById("tipo-servicio").addEventListener("change", function() {
        if (this.value === "otros") {
            document.getElementById("otro-servicio").style.display = "block";
        } else {
            document.getElementById("otro-servicio").style.display = "none";
        }
    });


    $(document).ready(function() {
        // Función para manejar el cambio de opción en el select del tipo de servicio
        $("#tipo-servicio").change(function() {
            if ($(this).val() == "otros") {
                $("#otro-servicio").show();
                $("#tipo-servicio-otro").prop();
            } else {
                $("#otro-servicio").hide();
                $("#tipo-servicio-otro").prop();
            }
        });

        // Función para manejar el envío del formulario
        $("form").submit(function(event) {
            event.preventDefault(); // Prevenir el envío del formulario

            // Obtener el valor del tipo de servicio seleccionado
            var tipoServicio = $("#tipo-servicio").val();

            // Validar si se seleccionó algún tipo de servicio
            if (tipoServicio == null || tipoServicio == "") {
                showToast("Por favor seleccione un tipo de servicio");
                return false;
            }

            // Validar si se seleccionó la opción "otros" y se ingresó el tipo de servicio
            if (tipoServicio == "otros") {
                var otroServicio = $("#tipo-servicio-otro").val().trim();
                if (otroServicio == "") {
                    showToast("Por favor especifique el tipo de servicio");
                    return false;
                }
            }

            // Obtener el valor del precio y la fecha
            var precio = $("#precio").val().trim();

            // Validar si se ingresó el precio y la fecha
            if (precio == "") {
                showToast("Por favor ingrese el precio del servicio");
                return false;
            } else {
                // Llamar a la función ServicesSave si todo está validado correctamente
                ServicesSave();
            }
        });
    });

    // Función para mostrar el mensaje de Toast
    function showToast(message) {
        Toastify({
            text: message,
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
                Toastify({
                    text: "Servicio guardado exitosamente",
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
                $("#tipo-servicio").val("");
                $("#otro-servicio").hide();
                $("#tipo-servicio-otro").val("");
                $("#precio").val("");

            },
            error: function(xhr) {
                Toastify({
                    text: "Ha ocurrido un error al guardar el servicio",
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
