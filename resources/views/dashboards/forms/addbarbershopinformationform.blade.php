@extends('layouts.adminhome')
@section('custom-php')
    {{-- En esta seccion vamos a meter el codigo php que necesitemos en las vistas y se va a setear automaticamente en el admin layout --}}
    @php
        $exist = false;
        $data = '';

        $phone = '';
        $whatsapp = '';
        $facebook = '';
        $instagram = '';
        $tikTok = '';
    @endphp
@endsection
@section('content')
    <!--contenedor de información del admin barberia-->
    <div class="container-information-barbery">
        <div class="card shadow mb-5 mt-3 bg-dark">
            <h1 class="container-fluid pt-2">Información de tu barbería <small class="ml-2 text-success"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Ayuda"
                    data-bs-content="Si desea cambiar alguno de los siguientes datos solo escriba en los campos de texto el valor nuevo y utilice el botón 'Guardar'"><i
                        class="ti-help-alt"></i></small></h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <form action="" method="post" id="form">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-dark" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Información general
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre de la barbería</label>
                                    <input type="text" name="name" id="name" class="form-control  bg-dark"
                                        placeholder="Escribe el nombre de tu barbería" value="{{ $barbershop->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Logo o imagen actual de tu barbería</label>
                                    <small class="ml-2 text-success" data-bs-container="body" data-bs-toggle="popover"
                                        data-bs-placement="top" title="Ayuda"
                                        data-bs-content="Si desea cambiar la imagen actual utilice el input 'Seleccionar archivo' que aparece debajo de la imagen"><i
                                            class="ti-help-alt"></i></small>
                                    <br>
                                    <img class="img-thumbnail mb-3 col-4" src="{{ asset($barbershop->image) }}"
                                        alt="">
                                    <input type="file" name="image" id="image" class="form-control  bg-dark">
                                </div>
                                <div class="mb-3">
                                    <label for="canton" class="form-label">Cantón</label>
                                    <input type="text" name="canton" id="canton" class="form-control  bg-dark"
                                        placeholder="Ingrese el nombre del cantón en el cuál se ubica la barbershop"
                                        value="{{ $barbershop->canton }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Dirección</label>
                                    <textarea name="address" id="address" class="form-control  bg-dark" placeholder="Escribe la dirección de tu barbería">{{ $barbershop->address }}</textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed  bg-dark" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Información de contacto
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body  bg-dark">
                                <div class="list-group">
                                    <div class="mb-3">
                                        <small class="text-success">* Marque y llene los campos con la información de redes
                                            y
                                            contacto para el barbero</small>
                                    </div>
                                    {{-- Item --}}
                                    @foreach ($socialMedia as $item)
                                        @if ($item->type == 'Telefono')
                                            @php
                                                $phone = $item->data;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <label class="list-group-item  bg-dark">
                                        <div class="m-3">
                                            <input id="phone-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="phone" {{ $phone != '' ? 'checked' : '' }}>
                                            <ion-icon size="large" name="call-outline"></ion-icon>
                                            <input id="phone-input" class="form-control  bg-dark" type="text"
                                                name="data[]" placeholder="Escriba su número de teléfono"
                                                value="{{ $phone != '' ? $phone : '' }}">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    @foreach ($socialMedia as $item)
                                        @if ($item->type == 'Whatsapp')
                                            @php
                                                $whatsapp = $item->data;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <label class="list-group-item  bg-dark">
                                        <div class="m-3">
                                            <input id="whatsapp-checkbox" class="form-check-input me-1"name="type[]"
                                                type="checkbox" value="whatsapp" {{ $whatsapp != '' ? 'checked' : '' }}>
                                            <ion-icon size="large" name="logo-whatsapp"></ion-icon>
                                            <input id="whatsapp-input" class="form-control  bg-dark" type="text"
                                                name="data[]" placeholder="Escriba su número de whatsapp"
                                                value="{{ $whatsapp != '' ? $whatsapp : '' }}">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    @foreach ($socialMedia as $item)
                                        @if ($item->type == 'Facebook')
                                            @php
                                                $facebook = $item->data;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <label class="list-group-item  bg-dark">
                                        <div class="m-3">
                                            <input id="facebook-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="facebook" {{ $facebook != '' ? 'checked' : '' }}>
                                            <ion-icon size="large" name="logo-facebook"></ion-icon>
                                            <input id="facebook-input" class="form-control  bg-dark" type="text"
                                                name="data[]" placeholder="Nombre de su perfil"
                                                value="{{ $facebook != '' ? $facebook : '' }}">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    @foreach ($socialMedia as $item)
                                        @if ($item->type == 'Instagram')
                                            @php
                                                $instagram = $item->data;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <label class="list-group-item  bg-dark">
                                        <div class="m-3">
                                            <input id="insta-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="insta" {{ $instagram != '' ? 'checked' : '' }}>
                                            <ion-icon size="large" name="logo-instagram"></ion-icon>
                                            <input id="insta-input" class="form-control  bg-dark" type="text"
                                                name="data[]" placeholder="Nombre de su perfil"
                                                value="{{ $instagram != '' ? $instagram : '' }}">
                                        </div>
                                    </label>
                                    {{-- Item --}}
                                    @foreach ($socialMedia as $item)
                                        @if ($item->type == 'Tiktok')
                                            @php
                                                $tikTok = $item->data;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <label class="list-group-item  bg-dark">
                                        <div class="m-3">
                                            <input id="tiktok-checkbox" class="form-check-input me-1" name="type[]"
                                                type="checkbox" value="tiktok" {{ $tikTok != '' ? 'checked' : '' }}>
                                            <ion-icon size="large" name="logo-tiktok"></ion-icon>
                                            <input id="tiktok-input" class="form-control  bg-dark" type="text"
                                                name="data[]" placeholder="Escriba su perfil"
                                                value="{{ $tikTok != '' ? $tikTok : '' }}">
                                        </div>
                                    </label>
                                    <div class="mb-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <input onClick="validate()" class="btn btn-outline-success" type="button" value="Guardar">
            </form>
            <br>
        </div>
    </div>
    <!-- Toast container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
    </div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover();
        });

        function showToast(message, type) {
            var toast = `
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header bg-${type === 'success' ? 'success' : 'danger'} text-white">
                    <strong class="mr-auto">${type === 'success' ? 'Éxito' : 'Error'}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body bg-${type === 'success' ? 'dark' : 'danger'}">
                    ${message}
                </div>
                </div>
            `;

            $('.toast-container').append(toast);

            // Personalizar el estilo del toast
            var toastElement = $('.toast:last');
            toastElement.addClass('position-fixed bottom-0 end-0 m-3'); // Posicionamiento
            toastElement.find('.toast-header').addClass(
                `bg-${type === 'success' ? 'success' : 'danger'} text-white`); // Estilo del encabezado
            toastElement.find('.toast-body').addClass(`bg-${type === 'success' ? 'light' : 'danger'}`); // Estilo del cuerpo

            toastElement.toast('show');
        }

        function validate() {
            // Obtenemos el formulario en html
            const form = document.getElementById('form');
            // Creamos un objeto que nos va almacenar toda la informacion del formulario para poder agregar o modificarla
            let data = new FormData(form);

            if (data.get('name') != '' && data.get('canton') != '' && data.get('address') != '') {
                if (socialmediaValidate() == true) {
                    data.append('_method', 'PUT');
                    saveBarbershop(data);
                }
            } else {
                showToast("Falta información por agregar correspondiente a la barbershop (Informacion general)", "error");
                return false;

            }
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

                        showToast("Debe agregar información correspondiente al canal de contacto seleccionado: ${contact}!",
                            "error");
                        return false;
                    }

                }
            }

            if (!isChecked) {
                showToast("Debe seleccionar al menos una opción de contacto y agregar su información correspondiente!",
                    "error");
                    return false;
            }

            // Si los checkboxes seleccionados y los inputs están llenos, se ejecuta la función barbersave()
            return true;
        }

        function saveBarbershop(data) {
            let url = "{{ route('barbershops.update', ['barbershop' => 0]) }}";
            url = url.replace('0', "{{ $id }}");
            $.ajax({
                type: "POST",
                url: "/barbershops/{{ $id }}",
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    socialmediaSave();
                }
            });
        }

        function socialmediaSave() {
            const checkboxes = [
                '#phone-checkbox',
                '#whatsapp-checkbox',
                '#facebook-checkbox',
                '#insta-checkbox',
                '#tiktok-checkbox'
            ];
            // EL ORDEN DE ESTE ARRAY DEBE COINCIDIR CON EL DE LOS INPUTS
            const contacts = ['Telefono', 'Whatsapp', 'Facebook', 'Instagram', 'Tiktok'];
            let types = [];
            let info = [];

            let isChecked = false;

            for (let i = 0; i < checkboxes.length; i++) {
                const checkbox = $(checkboxes[i]);
                const input = $('#' + checkbox.val() + '-input');

                if (checkbox.is(":checked")) {
                    isChecked = true;

                    if (input.val() !== '') {
                        types.push(contacts[i]);
                        info.push(input.val());
                    }
                }
            }
            $.ajax({
                url: '/socialmedia/store/for_barbershop',
                type: 'POST',
                data: {
                    type: types,
                    data: info
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        showToast("Información guardada exitosamente",
                            "success");
                            return true;
                    } else if (response.errors == true) {

                        showToast(
                            "IHa ocurrido un error al; guardar la información. Si el problema persiste contacte a los desarrolladores",
                            "error");
                            return false;
                    }
                }
            });
        }
    </script>
@endsection
