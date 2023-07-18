@extends('layouts.adminhome')
@section('content')
    <div class="">
        <div class="container-fluid">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title pb-3">
                                <div class="d-inline">
                                    <h4 style="color: #6c757d !important">Perfil del Barbero</h4>
                                    <span style="color: #6c757d !important" class="">Aqui puedes ver la información
                                        relevante disponible al público</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pb-3">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="{{ route('barbers.index') }}"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;"><a
                                            href="{{ route('barbers.index') }}">Barberos</a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;"><a href="#!">Área Personal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <!--Imagen de Perfil-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid"
                                        src="{{ asset('storage/images/user-profile/bg-img1.jpg') }}" alt="bg-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin de Imagen de Perfil-->
                    <div class="row">
                        {{-- Cuerpo de los formularios --}}
                        <div class="col-lg-12">
                            <!-- Barra de navegacion de tabla-->

                            <div class="tab-header card ">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personal" role="tab"
                                            style="color: #6c757d !important">Información Personal</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#binfo" role="tab"
                                            style="color: #6c757d !important">Servicios del Barbero</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#review" role="tab"
                                            style="color: #6c757d !important">Comentarios & Sugerencias</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                            </div>
                            <!--cierre navegacion de tabla -->

                            <!-- Informacion personal -->
                            <div class="tab-content">
                                <!-- Informacion General -->
                                <div class="tab-pane active" id="personal" role="tabpanel">
                                    <!-- personal card start -->
                                    <div class="card bg-dark">
                                        <div class="card-header">
                                            <h3 class="card-header-text" style="color: #6c757d !important">Acerca del
                                                Barbero</h3>

                                        </div>
                                        <div class="card-block">
                                            {{-- Área de llenado de perfil --}}
                                            <form id="personal-info-form" onsubmit="updateBarberUser(); return false;">
                                                @method('PUT')
                                                @csrf
                                                <div class="edit-info mb-1 pb-2">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h3 class="card-header-text pb-4"
                                                                style="color: #6c757d !important"> [Editar Información]
                                                            </h3>
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon p-1"><i
                                                                                                    class="icofont icofont-user"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="nombreCompleto"
                                                                                                name="nombreCompleto"
                                                                                                placeholder="Nombre Completo">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon p-1"><i
                                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="ubicacionTrabajo"
                                                                                                name="ubicacionTrabajo"
                                                                                                placeholder="Ubicación de la Barbería">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon pb-1"><i
                                                                                                    class="icofont icofont-ui-email"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="correo"
                                                                                                name="correo"
                                                                                                placeholder="Correo">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon pb-1"><i
                                                                                                    class="icofont icofont-mobile-phone"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="telefono"
                                                                                                name="telefono"
                                                                                                placeholder="Teléfono">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                                <div class="text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-success waves-effect waves-light m-r-20">Actualizar</button>
                                                                    <a href="{{ url('home') }}" id="button-cancel"
                                                                        class="btn btn-default waves-effect">Cancelar</a>
                                                                </div>
                                                            </div>
                                                            <!-- end of edit info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                            </form>
                                            <!-- end of edit-info -->
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                    <!-- Cierre de Informacion Personal-->
                                </div>
                                <!-- fin de informacion general -->

                                {{-- Servicios del Barbero --}}
                                <div class="tab-pane" id="binfo" role="tabpanel">
                                    <!-- info card start -->
                                    <div class="card mb-5 bg-dark">
                                        <div class="card-header">
                                            <h3 class="card-header-text" style="color: #6c757d !important">Servicios del
                                                Barbero</h3>
                                        </div>
                                        <div class="card-block pb-5">
                                            <div class="container-fluid">
                                                {{-- Cuerpo del servicio --}}
                                                <div id="service-list" class="card-block">
                                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                                                        {{-- Contenido generado dinámicamente --}}
                                                    </div>
                                                </div>
                                                {{-- Fin del cuerpo del servicio --}}
                                            </div>
                                        </div>

                                    </div>
                                    <!-- info card end -->
                                </div>

                                {{-- Comentarios y sugerencias --}}
                                <div class="tab-pane" id="review" role="tabpanel">
                                    <div class="card bg-dark">
                                        <div class="card-header">
                                            <h5 class="card-header-text" style="color: #6c757d !important">Comentarios &
                                                Sugerencias</h5>
                                        </div>
                                        <div id="service-list" class="card-block">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-8 offset-md-2">
                                                                <header class="text-center rounded-1 bg-info py-2">
                                                                    <h1 class="mt-2 text-white">Próximamente</h1>
                                                                </header>
                                                                <p class="text-center text-white bg-dark py-3">¡Nuestro
                                                                    nuevo sitio está casi listo!. Mientras puedes explorar otras áreas de nuestra aplicación :)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        {{-- Fin del cuerpo de los comentarios --}}

                                        {{-- Input para comentarios --}}

                                        {{-- <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Comentarios">
                                        <div class="input-group-text">
                                          <span class="">
                                            <i class="icofont icofont-send-mail"></i>
                                          </span>
                                        </div>
                                      </div> --}}
                                        {{-- Fin del Input de los comentarios --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Cierre de Informacíon Personal -->
                    </div>
                    {{-- Cierre del Cuerpo de los formularios --}}
                </div>

            </div>
            <!-- Page-body end -->

            <!-- Toast container -->
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
            </div>

            <div id="barber-info" data-user-id="{{ $userId }}"></div>

        </div>
    </div>



    <script>
        // Funciones que se ejecutan al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            barbershopBarberExist();
            initializeToasts();
            getServiceList();
        });

        // Verificacion de Usuario y consulta de sus datos para Información personal
        function barbershopBarberExist() {
            var userId = $('#barber-info').data('user-id');

            // Hacer la solicitud AJAX
            $.ajax({
                url: '/barbershopBarber/' + userId,
                type: 'GET',
                success: function(response) {
                    showToast(
                        'Hemos cargado la información previa de tu barbero para que puedas actualizarla. Revisa los campos.',
                        'success');
                    // Rellenar los campos del formulario con los datos recibidos
                    $('#nombreCompleto').val(response.name);
                    $('#ubicacionTrabajo').val(response.address);
                    $('#correo').val(response.email);
                    $('#telefono').val(response.telefono[
                        0]); // Seleccionar el primer teléfono en caso de haber varios
                },
                error: function(xhr) {
                    // Manejar el error de la solicitud AJAX
                    var errorMessage = 'Ha ocurrido un error al cargar la información previa.';

                    // Verificar el tipo de error
                    if (xhr.status === 404) {
                        errorMessage = 'No se encontró información previa para tu usuario.';
                    } else if (xhr.status === 500) {
                        errorMessage = 'Ha ocurrido un error interno en el servidor.';
                    }

                    // Mostrar un toast de error
                    showToast(errorMessage, 'error');
                }
            });
        }

        // Inicializar los toasts de Bootstrap 4
        function initializeToasts() {
            $('.toast').toast('hide'); // Ocultar el toast al cargar la página

            $('.toast .close').on('click', function() {
                $(this).closest('.toast').toast('hide');
            });
        }

        // Mostrar un toast
        function showToast(message, type) {
            var toast = `
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header bg-${type === 'success' ? 'success' : 'danger'} text-white">
                    <strong class="mr-auto">${type === 'success' ? 'Éxito' : 'Error'}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body bg-${type === 'success' ? 'light' : 'danger'}">
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

        // Para los servicios
        function getServiceList() {
            var barberId = $('#barber-info').data('user-id');

            $.ajax({
                type: 'GET',
                url: '/barbershop/barber/services/' + barberId,
                success: function(response) {
                    if (response.services && response.services.length > 0) {
                        renderServiceCards(response.services);
                    } else {
                        // Mostrar un mensaje si no hay servicios disponibles
                        var noServicesMessage = 'No se encontraron servicios.';
                        showToast(noServicesMessage, 'info');
                    }
                },
                error: function(xhr) {
                    // Manejar el error de la solicitud AJAX
                    var errorMessage = 'Ha ocurrido un error al obtener la lista de servicios.';

                    if (xhr.status === 500) {
                        errorMessage = 'Ha ocurrido un error interno en el servidor.';
                    }

                    showToast(errorMessage, 'Error');
                }
            });
        }

        function renderServiceCards(services) {
            var serviceList = $('#service-list');
            serviceList.empty();

            if (services && Array.isArray(services)) {
                var cardRow = $('<div>').addClass('row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4');

                $.each(services, function(index, service) {
                    var cardBlock = $('<div>').addClass('col');
                    var card = $('<div>').addClass('card b-l-success business-info services');
                    var cardHeader = $('<div>').addClass('card-header');
                    var serviceHeader = $('<div>').addClass('service-header');
                    var serviceName = $('<h5>').addClass('card-title text-black ml-2 mt-2').text('Servicio #' + (index + 1));
                    serviceHeader.append(serviceName);

                    var cardBody = $('<div>').addClass('card-block');
                    var innerRow = $('<div>').addClass('row');

                    var colTipoServicio = $('<div>').addClass('col-sm-12');
                    var tipoServicioLabel = $('<label>').addClass('card-label text-black').attr('for',
                        'tipo-servicio-' + service.id).text('Tipo de servicio:');
                    var tipoServicioSelect = $('<select>').addClass('form-control tipo-servicio').attr('id',
                        'tipo-servicio-' + service.id).attr('name', 'tipo-servicio');
                    var tipoServicioOptions = {
                        'corte-cabello': 'Corte de cabello',
                        'afeitado': 'Afeitado',
                        'corte-barba': 'Corte de barba',
                        'corte-cabello-afeitado': 'Corte de cabello + afeitado',
                        'corte-cabello-barba': 'Corte de cabello + corte de barba',
                        'Retoques-cabello&barba': 'Retoques de Cabello o barba',
                        'otros': 'Otros'
                    };

                    $.each(tipoServicioOptions, function(value, text) {
                        var option = $('<option>').attr('value', value).text(text);
                        tipoServicioSelect.append(option);
                    });

                    var descripcion = service.description;
                    var precio = service.price;

                    // Verificar si la descripción coincide con algún valor de la lista
                    if (descripcion in tipoServicioOptions) {
                        tipoServicioSelect.val(descripcion);
                    } else {
                        tipoServicioSelect.val('otros');
                    }

                    colTipoServicio.append(tipoServicioLabel);
                    colTipoServicio.append(tipoServicioSelect);

                    innerRow.append(colTipoServicio);

                    var colOtros = $('<div>').addClass('col-sm-12').hide();
                    var otrosInputContainer = $('<div>').addClass('form-group').attr('id',
                        'otros-input-container-' + service.id);
                    var otrosLabel = $('<label>').addClass('card-label text-black').attr('for', 'otros-' + service
                        .id).text('Especificar:');
                    var otrosInput = $('<input>').addClass('form-control otros-input').attr('type', 'text').attr(
                        'id', 'otros-' + service.id).attr('name', 'otros');

                    otrosInputContainer.append(otrosLabel);
                    otrosInputContainer.append(otrosInput);

                    colOtros.append(otrosInputContainer);

                    innerRow.append(colOtros);

                    var colPrecio = $('<div>').addClass('col-sm-12');
                    var precioLabel = $('<label>').addClass('card-label text-black').attr('for', 'precio-' + service
                        .id).text('Precio:');
                    var precioInput = $('<input>').addClass('form-control').attr('type', 'text').attr('id',
                        'precio-' + service.id).attr('name', 'precio').attr('placeholder',
                        'Precio del servicio').val(precio);

                    colPrecio.append(precioLabel);
                    colPrecio.append(precioInput);

                    innerRow.append(colPrecio);

                    cardBody.append(innerRow);

                    var textCenter = $('<div>').addClass('text-center');
                    var actualizarButton = $('<button>').addClass('mr-1 btn btn-success waves-effect waves-light')
                        .attr('id', 'actualizar').text('Actualizar');
                    var eliminarButton = $('<button>').addClass('btn btn-danger waves-effect waves-light').attr(
                        'id', 'eliminar').text('Eliminar');
                    var buttonsContainer = $('<div>').addClass('text-center mt-3');

                    buttonsContainer.append(actualizarButton);
                    buttonsContainer.append(eliminarButton);

                    cardBody.append(buttonsContainer);

                    card.append(serviceHeader);
                    card.append(cardBody);

                    cardBlock.append(card);
                    cardRow.append(cardBlock);

                    // Mostrar u ocultar el campo de especificar según la opción seleccionada
                    tipoServicioSelect.on('change', function() {
                        var selectedOption = $(this).val();
                        if (selectedOption === 'otros') {
                            colOtros.show();
                        } else {
                            colOtros.hide();
                        }
                    });

                    // Ejecutar el evento change para mostrar u ocultar el campo de especificar inicialmente
                    tipoServicioSelect.trigger('change');

                    // Agregar la lógica adicional al seleccionar manualmente la opción "otros"
                    if (descripcion !== '' && !(descripcion in tipoServicioOptions)) {
                        tipoServicioSelect.val('otros');
                        colOtros.show();
                        otrosInput.val(descripcion);
                    }

                    // Agregar el evento de clic para el botón de actualizar
                    cardBlock.find('#actualizar').data('service-id', service.id).click(actualizarService);

                    // Agregar el evento de clic para el botón de eliminar
                    cardBlock.find('#eliminar').data('service-id', service.id).click(eliminarService);

                });

                serviceList.append(cardRow);
            } else {
                // Mostrar un mensaje si no hay servicios disponibles
                var noServicesMessage = 'No se encontraron servicios.';
                showToast(noServicesMessage, 'info');
            }
        }




        // Mostrar u ocultar el campo de especificar según la opción seleccionada
        function toggleOtrosInput(serviceId, selectedOption) {
            var otrosInputContainer = $('#otros-input-container-' + serviceId);

            if (selectedOption === 'otros') {
                otrosInputContainer.show();
            } else {
                otrosInputContainer.hide();
            }
        }

        // Función para manejar el evento de clic del botón de actualizar
        function actualizarService() {
            var selectedOption = $(this).closest('.card-block').find('.tipo-servicio').val();
            var newDescripcion = (selectedOption === 'otros') ? $(this).closest('.card-block').find('.otros-input').val() :
                selectedOption;
            var newPrecio = $(this).closest('.card-block').find('[id^="precio"]').val();
            var serviceId = $(this).data('service-id');

            // Realizar la solicitud AJAX para actualizar el servicio
            $.ajax({
                type: 'POST',
                url: '/actualizar-servicio',
                data: {
                    serviceId: serviceId,
                    descripcion: newDescripcion,
                    precio: newPrecio
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Manejar la respuesta exitosa
                    if (response.success) {
                        // Actualizar la información del servicio en la interfaz
                        var cardBlock = $(this).closest('.card-block');
                        cardBlock.find('.card-header-text').text('Servicio #' + serviceId);
                        cardBlock.find('.tipo-servicio').val(newDescripcion);
                        cardBlock.find('[id^="precio"]').val(newPrecio);
                        showToast('El servicio ha sido actualizado correctamente.', 'success');
                    } else {
                        showToast('Ha ocurrido un error al actualizar el servicio.', 'error');
                    }
                },
                error: function() {
                    showToast('Ha ocurrido un error al realizar la solicitud.', 'error');
                }
            });
        }

        // Función para manejar el evento de clic del botón de eliminar
        function eliminarService() {
            var serviceId = $(this).data('service-id');

            // Realizar la solicitud AJAX para eliminar el servicio
            $.ajax({
                type: 'POST',
                url: '/eliminar-servicio',
                data: {
                    serviceId: serviceId
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Manejar la respuesta exitosa
                    if (response.success) {
                        // Eliminar el servicio de la interfaz
                        $(this).closest('.card-block').remove();
                        showToast('El servicio ha sido eliminado correctamente.', 'success');
                    } else {
                        showToast('Ha ocurrido un error al eliminar el servicio.', 'error');
                    }
                },
                error: function() {
                    showToast('Ha ocurrido un error al realizar la solicitud.', 'error');
                }
            });
        }
    </script>
@endsection
