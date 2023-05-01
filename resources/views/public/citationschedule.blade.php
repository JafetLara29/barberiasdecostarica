@extends('layouts.public')
@section('content')
    @if (isset($result) && $result == 'success')
        <script>
            Toastify({
                text: "Cita enviada exitosamente",
                duration: 5000,
                gravity: "bottom",
                position: "right",
                className: "custom_toast",
                style: {
                    background: "linear-gradient(to right, green, yellowgreen)",
                },

            }).showToast();
        </script>
    @else
        @if (isset($result) && $result == 'error')
            <script>
                Toastify({
                    text: "Error al agendar la cita. Inténtelo de nuevo",
                    duration: 5000,
                    gravity: "bottom",
                    position: "right",
                    className: "custom_toast",
                    style: {
                        background: "linear-gradient(to right, red, red)",
                    },

                }).showToast();
            </script>
        @endif
    @endif
    <!-- End Slider Area -->
    <section class="pt-5 barbershop-section">
        <div class="atf-section-padding">
            {{-- <hr class="text-light"> --}}
            <h1 class="text-light title text-center">Agenda una cita con {{ $barber->name }}</h1>
            <hr class="text-light mb-5">
            <!-- Contenedor del calendario -->
            {{-- <div class="container pt-5 mb-5"> --}}
                <div id="calendar">

                </div>
            {{-- </div> --}}
    
            <form id="form" action="{{ route('citations.store') }}" method="post">
                @csrf
                <!-- Modal -->
                <div class="modal fade" id="mymodal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 id="modal-title" class="modal-title text-light">Programar evento en agenda</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="barber" id="barber" value="{{ $barber->id }}">
                                {{-- HORAS --}}
                                <div class="mb-3">
                                    Horas disponibles: 
                                    <div class="row d-flex justify-content-center flex-wrap" id="hours-container">
                                        
                                    </div>
                                </div>
                                
                                {{-- SERVICIOS --}}
                                <div class="m-3 text-start" id="services-container">
                                    {{-- <input type="hidden" name="selected" id="selected" value=""> --}}
                                    <p class="card-text">Seleccione el servicio que desea:</p>
                                    <div class="d-flex flex-wrap justify-content-center">
                                        @foreach ($services as $service)
                                            <div class="list-group list-group-citation">
                                                <label class="card services-card text-center m-1 justify-content-center" id="{{ $service->id }}" for="service_id{{ $service->id}}" onclick="setInput('services-card', '{{ $service->id}}', 'service_id{{ $service->id}}')">
                                                    <input class="visually-hidden" type="radio" id="service_id{{ $service->id}}" name="service_id" value="{{ $service->id }}">
                                                    <p class="text-light"><strong>{{ $service->description }}</strong> (₡{{ $service->price }})</p>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" id="first-modal-button"  data-bs-target="#mymodal2" data-bs-toggle="modal" data-bs-dismiss="modal">Listo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="mymodal2" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 id="modal-title" class="modal-title text-light">Programar evento en agenda</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="barber" id="barber" value="{{ $barber->id }}">
                                <div class="m-3 text-start">
                                    <input type="text" class="form-control" name="sender" id="sender" placeholder="Ingrese su nombre">
                                </div>
                                <div class="m-3 text-start">
                                    Toma un tiempo para asegurarte que el servicio escogido es realmente el que deseas.
                                    <hr>
                                    <input class="me-1" type="checkbox" id="check" onclick="activeButton()">
                                    {{-- <ion-icon size="large" name="call-outline"></ion-icon> --}}
                                    <label for="check" class="text-muted">
                                        Sí, la información es la correcta        
                                    </label> 
                                    <hr class="mb-5">
                                    
                                    {{-- <input type="submit" id="btn-submit" class="btn form-control bg-dark citation-input text-light visually-hidden" value="Agendar cita"> --}}
                                </div>
                                <div class="m-5 text-start">
                                    <p class="card-text">NOTA: Una vez envíe su cita el barbero deberá confirmarla. Al confirmarla le llegará un mensaje a su dispositivo indicandolo.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-target="#mymodal" data-bs-toggle="modal" data-bs-dismiss="modal">Volver</button>
                                <button type="submit" id="btn-submit" class="btn btn-primary visually-hidden">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        var validation = [];
        $(document).ready(function () {
            $('#form').submit(function(e) {
                e.preventDefault();
                if(validation.length == 2 && $('#sender').val() != ""){
                    document.getElementById('form').submit();
                }else{
                    Toastify({
                        text: "Asegurese de ingresar todos los datos solicitados",
                        duration: 5000,
                        gravity: "top",
                        position: "center",
                        className: "custom_toast",
                        style: {
                            background: "linear-gradient(to right, red, red)",
                        },
                    }).showToast();
                }
            });
        });

        function setInput(class_, id, inputId){
            setBackground(class_, id);
        } 

        function setBackground(class_ ,id){
            let exist = false;
            $(`.${class_}`).removeClass('gold-background');
            $(`#${id}`).addClass('gold-background');
            validation.forEach(element => {
                if(element == class_){
                    exist = true;
                }
            });
            if(exist == false){
                validation.push(class_);
            }
        }

        function activeButton(){
            if($('#check').prop('checked')){
                $('#btn-submit').removeClass('visually-hidden');
            }else{
                $('#btn-submit').addClass('visually-hidden');
            }
        }
    </script>
    <script>
        let view = "home";
        // var myModal = window.bootstrap.Modal(document.getElementById('mymodal'));
        let form_ = document.getElementById("form");
    </script>
@endsection
