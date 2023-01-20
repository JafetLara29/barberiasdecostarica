@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Estamos casi listos...</label>
        <label class="display-3 text-light mb-3">Ingresa los siguientes datos para que el barbero pueda reconocerte</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            {{-- Formulario para la agenda --}}
            <form id="form" action="{{ route('citations.store') }}" class="m-2 text-light" method="POST" name="form">
                @csrf
                <div class="m-3 text-start">
                    {{-- <p class="card-text">Ingrese el nombre del propietario(a) de la cita:</p> --}}
                    <input type="text" class="form-control citation-input" name="sender" id="sender" placeholder="Ingrese su nombre">
                </div>
                <div class="m-3 text-start">
                    <input type="hidden" name="selected" id="selected" value="">
                    <p class="card-text">Seleccione el servicio que desea:</p>
                    @foreach ($services as $item)
                        <div class="list-group list-group-citation">
                            <label class="list-group-item mt-1">
                                <div class="m-3">
                                    <input type="radio" id="{{ $item->id }}" name="service_id" id="service_id" value="{{ $item->id }}" onclick="selectedFunction()">
                                    <label for="{{ $item->id }}"><strong>{{ $item->description }}</strong> (₡{{ $item->price }})</label><br>
                                    
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>
                <hr class="mt-5">
                <div class="ml-3 text-start">
                    <p class="card-text m-3">Toma un tiempo para asegurarte que el servicio escogido es realmente el que deseas.</p>
                    <label class="list-group-item mt-1">
                        <div class="m-3">
                            <input class="form-check-input me-1" type="checkbox" id="check" onclick="activeButton()">
                            {{-- <ion-icon size="large" name="call-outline"></ion-icon> --}}
                            Si, la información es la correcta        
                        </div>
                    </label>
                    <hr class="mb-5">
                    <input type="submit" id="btn-submit" class="btn form-control bg-dark citation-input text-light visually-hidden" value="Agendar cita" onsubmit="validateInputs()">
                </div>
                <div class="m-5 text-start">
                    <p class="card-text">NOTA: Una vez envíe su cita el barbero deberá confirmarla. Al confirmarla le llegará un mensaje a su dispositivo indicandolo.</p>
                </div>
            </form>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            $('#form').submit(function(e) {
                e.preventDefault();
                if($('#sender').val() == ''){
                    Toastify({
                        text: "Debe ingresar su nombre para continuar",
                        duration: 5000,
                        gravity: "top",
                        position: "center",
                        className: "custom_toast",
                        style: {
                            background: "linear-gradient(to right, green, yellowgreen)",
                        },
                    }).showToast();
                }else{
                    if($('#selected').val() != ''){
                        document.form.submit();
                    }else{
                        Toastify({
                            text: "Debe seleccionar un servicio",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            className: "custom_toast",
                            style: {
                                background: "linear-gradient(to right, green, yellowgreen)",
                            },
                        }).showToast();
                    }
                }
            });
        });
        
        function activeButton(){
            if($('#check').prop('checked')){
                $('#btn-submit').removeClass('visually-hidden');
            }else{
                $('#btn-submit').addClass('visually-hidden');
            }
        }

        function selectedFunction(){
            $('#selected').val('selected');
        }
    </script>
@endsection