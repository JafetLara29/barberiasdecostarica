@extends('layouts.adminhome')
@section('content')
    <div class="scroll-area">
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
                                    <input id="barbername" type="text" name="name" class="form-control"
                                        placeholder="Escribe el nombre de tu barbero" required>
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
            <input onClick="barberValidate()" class="btn btn-outline-success" type="submit" value="Guardar">
        </div>
    </div>
    <script>
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

        function clearInputsBarbers(){
            document.getElementById('general-info').reset();
            document.getElementById('socialmedia-info').reset();
            document.getElementById('schedule-info').reset();
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

            // Si los checkboxes seleccionados y los inputs están llenos, se ejecuta la función barbersave()
            barbersave();
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
