@extends('layouts.adminhome')
@section('content')
    <div class="">
        <div class="card shadow mb-5">
            <h1 class="container-fluid pt-2">Información de barbero</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Información general
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <small class="text-muted">LLene los campos vacios seleccionandolos y al finalizar precione
                                    el botón "Guardar"</small>
                            </div>
                            <form id="general-info" action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre del Barbero</label>
                                    <input onblur="existBarberValidate()" id="barbername" type="text" name="name"
                                        class="form-control" placeholder="Escribe el nombre de tu barbero" required>
                                    {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Imagen de perfil</label>
                                    <div class="form-group">
                                        <label for="image">Seleccione una imagen para el perfil de su barbero:</label>
                                        <input type="file" class="form-control" name="image" id="inputimage" required>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Información del horario
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <small class="text-muted">Marque los días en que su barbero viene a trabajar:</small>
                            <form id="schedule-info" class="list-group" action="" method="post">
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="monday"
                                            id="monday-checkbox">
                                        Lunes
                                    </div>
                                    de: <input id="monday-start" type="time" name="start[]">
                                    a: <input id="monday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="tuesday"
                                            id="tuesday-checkbox">
                                        Martes
                                    </div>
                                    de: <input id="tuesday-start" type="time" name="start[]">
                                    a: <input id="tuesday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="wednesday"
                                            id="wednesday-checkbox">
                                        Miércoles
                                    </div>
                                    de: <input id="Wednesday-start" type="time" name="start[]">
                                    a: <input id="Wednesday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="thursday"
                                            id="thursday-checkbox">
                                        Jueves
                                    </div>
                                    de: <input id="thursday-start" type="time" name="start[]">
                                    a: <input id="thursday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="friday"
                                            id="friday-checkbox">
                                        Viernes
                                    </div>
                                    de: <input id="friday-start" type="time" name="start[]">
                                    a: <input id="friday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="saturday"
                                            id="saturday-checkbox">
                                        Sabado
                                    </div>
                                    de: <input id="saturday-start" type="time" name="start[]">
                                    a: <input id="saturday-end" type="time" name="end[]">
                                </label>
                                {{-- Item --}}
                                <label class="list-group-item">
                                    <div class="m-3">
                                        <input class="form-check-input" name="day[]" type="checkbox" value="sunday"
                                            id="sunday-checkbox">
                                        Domingo
                                    </div>
                                    de: <input id="sunday-start" type="time" name="start[]">
                                    a: <input id="sunday-end" type="time" name="end[]">
                                </label>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Información de contacto
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <form id="socialmedia-info" action="" method="post">
                                    <div class="mb-3">
                                        <small class="text-muted">"Marque y llene los campos con la información de redes y
                                            contacto para el barbero (Puede agregar un link a las redes si lo
                                            desea)"</small>
                                    </div>
                                    {{-- Item --}}
                                    <label class="list-group-item">
                                        <div class="m-3">
                                            <input id="phone-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="phone">
                                            <ion-icon size="large" name="call-outline"></ion-icon>
                                            <input id="phone-input" class="form-control" type="text" name="data[]"
                                                placeholder="Escriba su número de teléfono" value="">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    <label class="list-group-item">
                                        <div class="m-3">
                                            <input id="whatsapp-checkbox" class="form-check-input me-1"name="type[]"
                                                type="checkbox" value="whatsapp">
                                            <ion-icon size="large" name="logo-whatsapp"></ion-icon>
                                            <input id="whatsapp-input" class="form-control" type="text"
                                                name="data[]" placeholder="Escriba su número de whatsapp"
                                                value="">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    <label class="list-group-item">
                                        <div class="m-3">
                                            <input id="facebook-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="facebook">
                                            <ion-icon size="large" name="logo-facebook"></ion-icon>
                                            <input id="facebook-input" class="form-control" type="text"
                                                name="data[]" placeholder="Nombre de su perfil" value="">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    <label class="list-group-item">
                                        <div class="m-3">
                                            <input id="insta-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="insta">
                                            <ion-icon size="large" name="logo-instagram"></ion-icon>
                                            <input id="insta-input" class="form-control" type="text" name="data[]"
                                                placeholder="Nombre de su perfil" value="">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    <label class="list-group-item">
                                        <div class="m-3">
                                            <input id="tiktok-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="tiktok">
                                            <ion-icon size="large" name="logo-tiktok"></ion-icon>
                                            <input id="titktok-input" class="form-control" type="text" name="data[]"
                                                placeholder="Escriba su perfil" value="">
                                        </div>
                                    </label>
                                    <div class="mb-3">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input id="submit-button" onClick="barberValidate()" class="btn btn-outline-success" type="submit"
                value="Guardar">
        </div>
    </div>
    <script>
        //Para en caso de existir un barber tener su id global
        let globalId="";
        //Methods to preload the information if exists an user_id, auth()->user_id or role_id related to the form information
        function existBarberValidate() {
            $.ajax({
                url: '/verify-barber',
                type: 'POST',
                dataType: 'json',
                data: {
                    name: $('#barbername').val() // Reemplaza con el nombre del barbero que deseas verificar
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.existe) {
                        Toastify({
                            text: "Hemos encontrado informacion previamente guardada , te ayudamos para que actualices la informacion. Revisa los formularios ",
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

                        // Cambiamos el nombre del botón de guardar a actualizar
                        $('#submit-button').val('Actualizar');

                        // Barbero encontrado, precargar la información en los inputs
                        $('#nombre').val($('#barbername').val());
                        $('#user_id').val(response.user_id);
                        globalId=response.user_id;

                        // Llamar a la función de verificar horario
                        existScheduleValidate(response.user_id);
                    } else {
                        // Continuar con el flujo inicial y enviamos una advertencia
                        Toastify({
                            text: "¡Tienes suerte , no hay barberos con este nombre",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                color: "black", // Color del texto en negro
                                fontWeight: "bold", // Negrita en el texto
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                            },
                        }).showToast();
                        clearInputsBarbers();
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error:', errorThrown);
                    // Manejamos el error
                }
            });
        }

        //Validamos si existe un horario para el barbero previamente existente
        function existScheduleValidate(id) {
            $.ajax({
                url: '/verify-schedule',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id // Reemplaza con el id del barbero que deseas verificar
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {

                        // Barbero encontrado, precargar la información en los inputs del horario
                        var scheduleInfo = response.data;
                        for (var i = 0; i < scheduleInfo.length; i++) {
                            var day = scheduleInfo[i].day;
                            var start = scheduleInfo[i].start;
                            var end = scheduleInfo[i].end;

                            $('#' + day + '-checkbox').prop('checked', true);
                            $('#' + day + '-start').val(start);
                            $('#' + day + '-end').val(end);
                        }

                        // Llamar a la función de verificar redes sociales
                        existSocialmediaValidate(id);
                    } else {
                        // Continuar con una advertencia
                        Toastify({
                            text: "Al parecer no hay informacion de horario relacionada al barbero !",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                color: "black", // Color del texto  en negro
                                fontWeight: "bold", // Negrita en el texto
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                            },

                        }).showToast();
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error:', errorThrown);
                    // Mostramos error al estilo hackerman
                }
            });
        }
        //Validamos si existe unas redes sociales relacionadas al barbero existente
        function existSocialmediaValidate(id) {
            $.ajax({
                url: '/verify-Social',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id // Reemplaza con el id del barbero que deseas verificar
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Barbero encontrado, precargar la información en los inputs de redes sociales
                        var socialmediaInfo = response.data;
                        for (var i = 0; i < socialmediaInfo.length; i++) {
                            var type = socialmediaInfo[i].type;
                            var data = socialmediaInfo[i].data;

                            $('#' + type + '-checkbox').prop('checked', true);
                            $('#' + type + '-input').val(data);
                        }
                    } else {
                        // Enviamos una advertencia de falta de información
                        Toastify({
                            text: "Al parecer no hay informacion de redes Sociales relacionada al barbero !",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                color: "black", // Color del texto  en negro
                                fontWeight: "bold", // Negrita en el texto
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                            },

                        }).showToast();

                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error:', errorThrown);
                    // Mostrar error al estilo hackerman
                }
            });
        }


        // making validations on the checkboxes to ensure that something is coming from imputs of every form
        function barberValidate() {
            var barbername = $('#barbername').val();
            var inputimage = $('#inputimage')[0].files;

            if (barbername && inputimage.length > 0) {
                scheduleValidate();
            } else {
                Toastify({
                    text: "Asegurese de llenar el campo de nombre e imagen de perfil de su barbero !",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                        color: "black", // Color del texto  en negro
                        fontWeight: "bold", // Negrita en el texto
                        boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                    },

                }).showToast();
            }

        }

        //Para vaciar los campos de los formularios
        function clearInputsBarbers() {


            document.getElementById('socialmedia-info').reset();
            document.getElementById('schedule-info').reset();
            $('#submit-button').val('Guardar');
            globalId=="";

        }

        function scheduleValidate() {
            const checkboxes = [
                $('#monday-checkbox'),
                $('#tuesday-checkbox'),
                $('#wednesday-checkbox'),
                $('#thursday-checkbox'),
                $('#friday-checkbox'),
                $('#saturday-checkbox'),
                $('#sunday-checkbox')
            ];

            let isChecked = false; // Variable para verificar si al menos un checkbox está seleccionado

            const days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

            for (let i = 0; i < checkboxes.length; i++) {
                const checkbox = checkboxes[i];
                const startInput = $('#' + checkbox.val() + '-start'); // Se utiliza jQuery para obtener el elemento input
                const endInput = $('#' + checkbox.val() + '-end'); // Se utiliza jQuery para obtener el elemento input

                if (checkbox.is(":checked")) {
                    isChecked = true; // Se marca la variable como true si al menos un checkbox está seleccionado

                    if (startInput.val() === '' || endInput.val() === '') {
                        const day = days[i]; // Obtener el nombre del día en español

                        Toastify({
                            text: "Debe añadir una hora de entrada y salida correspondiente al día seleccionado: " +
                                day + "!",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #f9d9bc, #f5cda1)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)",
                            },
                        }).showToast();
                        return false; // Se retorna false para evitar el envío del formulario y salir de la función
                    }
                }
            }

            if (!isChecked) {
                Toastify({
                    text: "Debe seleccionar al menos un día para trabajar y agregar su horario correspondiente!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: "linear-gradient(to right, #f9d9bc, #f5cda1)",
                        color: "black",
                        fontWeight: "bold",
                        boxShadow: "0 4px 8px rgba(0,0,0,0.1)",
                    },
                }).showToast();
                return false; // Se retorna false para evitar el envío del formulario
            }

            // Si los checkboxes seleccionados y los inputs están llenos, se ejecuta la función socialmediaValidate()
            socialmediaValidate();
        }

        function socialmediaValidate() {
            const checkboxes = [
                '#phone-checkbox',
                '#whatsapp-checkbox',
                '#facebook-checkbox',
                '#insta-checkbox',
                '#tiktok-checkbox'
            ];
            const contacts = ['Telefono', 'Whatsapp', 'Facebook', 'Instagram', 'Tiktok'];

            let isChecked = false; // Variable para verificar si al menos un checkbox está seleccionado

            for (let i = 0; i < checkboxes.length; i++) {
                const checkbox = $(checkboxes[i]);
                const input = $('#' + checkbox.val() + '-input'); // Se utiliza jQuery para obtener el elemento input

                if (checkbox.is(":checked")) {
                    isChecked = true; // Se marca la variable como true si al menos un checkbox está seleccionado

                    if (input.val() === '') {
                        const contact = contacts[i]; // Obtener el nombre del contacto en español

                        Toastify({
                            text: `Debe agregar información correspondiente al canal de contacto seleccionado: ${contact}!`,
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                color: "black", // Color del texto en negro para mayor contraste
                                fontWeight: "bold", // Negrita en el texto
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                            },
                        }).showToast();
                        return false; // Se retorna false para evitar el envío del formulario y salir de la función
                    }
                }
            }

            if (!isChecked) {
                Toastify({
                    text: "Debe seleccionar al menos una opción de contacto y agregar su información correspondiente!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                        color: "black", // Color del texto en negro para mayor contraste
                        fontWeight: "bold", // Negrita en el texto
                        boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                    },
                }).showToast();
                return false; // Se retorna false para evitar el envío del formulario
            }

            // Si los checkboxes seleccionados y los inputs están llenos, se ejecuta la función para validar si el formulario guarda o actualiza
            if ($('#submit-button').val() == 'Guardar') {
                barbersave();
            } else {
                //Le pasamos su id global
                barberUpdate(globalId);
            }

        }

        //Functions of Updating
        function barberUpdate(id) {
            // Collect the info from the general-info form
            var htmlForm = document.getElementById('general-info');
            var form = new FormData(htmlForm);

            $.ajax({
                url: '/barbers/' + id,
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success == true && response.id != 0) {
                        // If the corresponding data is received from the backend, proceed to update the schedule info
                        scheduleUpdate(id);
                    } else if (response.errors == true) {
                        Toastify({
                            text: "Ha ocurrido un error, asegúrese de llenar los campos de su barbero.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Un error ha ocurrido al guardar el nombre y perfil de su barbero.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    }
                }
            });
        }

        function scheduleUpdate(id) {
            // Collect the info from the schedule-info form
            var htmlForm = document.getElementById('schedule-info');
            var form = new FormData(htmlForm);
            form.append("barber_id", id);

            $.ajax({
                url: '/schedule/' + id,
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success == true && response.id != '') {
                        // If the corresponding data is received from the backend, proceed to update the social media info
                        socialmediaUpdate(id);
                    } else if (response.errors == true) {
                        Toastify({
                            text: "Ha ocurrido un error, debe llenar la información del horario.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Un error ha ocurrido al guardar el horario.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    }
                }
            });
        }

        function socialmediaUpdate(id) {
            // Collect the info from the socialmedia-info form
            var htmlForm = document.getElementById('socialmedia-info');
            var form = new FormData(htmlForm);
            form.append("barber_id", id);

            $.ajax({
                url: '/socialmedia/' + id,
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {

                        Toastify({
                            text: "Información actualizada exitosamente!",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #a8dba8, #7bc87b)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                        clearInputsBarbers();
                    } else if (response.errors == true) {
                        Toastify({
                            text: "Ha ocurrido un error, debe llenar los campos de la información de contacto.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Un error ha ocurrido.",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, #ffcccc, #ff9999)",
                                color: "black",
                                fontWeight: "bold",
                                boxShadow: "0 4px 8px rgba(0,0,0,0.1)"
                            }
                        }).showToast();
                    }
                }
            });
        }



        // Since we validate the info we can proceed to save it in the next schema : [Barber->schedule->socialmedia]
        function barbersave() {
            //Collecting the info from the general-info form
            var htmlForm = document.getElementById('general-info');
            var form = new FormData(htmlForm);

            $.ajax({
                url: '/barbers',
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success == true && response.id != 0) {

                        // If we receipt the corresponding data from backend we proceed to save the info and let the pass to the next method
                        schedulesave(response.id);

                    } else if (response.errors == true) {
                        Toastify({
                            text: "Ha ocurrido un error, asegurese de llenar los campos de su barbero!",
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

                    } else {
                        Toastify({
                            text: "Un error ha ocurrido al guardar el nombre y perfil de su barbero !",
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
                }
            });

        }

        function schedulesave(id) {
            //Collecting the info from the schedule-info form
            var htmlForm = document.getElementById('schedule-info');
            var form = new FormData(htmlForm);
            form.append("barber_id", id);


            $.ajax({
                url: '/schedule',
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success == true && response.id != '') {
                        // If we receipt the corresponding data from backend we proceed to save the info and let the pass to the next method
                        socialmediasave(response.id);

                    } else if (response.errors == true) {

                        Toastify({
                            text: "Ha ocurrido un error, debe de llenar la informacion del horario !",
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

                    } else {
                        Toastify({
                            text: "Un error ha ocurrido al guardar el horario !",
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
                }
            });

        }

        function socialmediasave(id) {
            //Collecting the info from the socialmedia-info form
            var htmlForm = document.getElementById('socialmedia-info');
            var form = new FormData(htmlForm);
            form.append("barber_id", id);

            $.ajax({
                url: '/socialmedia',
                type: 'POST',
                data: form,
                dataType: 'json',
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {


                        // If we receipt the corresponding data from backend we proceed to save the info and show the success message
                        Toastify({
                            text: "Información guardada exitosamente !!!!!",
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

                        clearInputsBarbers();

                    } else if (response.errors == true) {
                        // Display an error message
                        Toastify({
                            text: "Ha ocurrido un error, debe de llenar los campos de la informacion de contacto !!!!!",
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

                    } else {
                        // Display an error message
                        Toastify({
                            text: "Un error ha ocurrido !!!!!",
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
                }
            });


        }
    </script>
@endsection
