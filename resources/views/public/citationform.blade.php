@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Estamos casi listos...</label>
        <label class="display-3 text-light mb-3">Ingresa los siguientes datos para que el barbero pueda reconocerte</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            {{-- Formulario para la agenda --}}
            <form class="card citation-card-form m-2" style="color:black; text-decoration:none;">
                <div class="m-3 text-start">
                    {{-- <p class="card-text">Ingrese el nombre del propietario(a) de la cita:</p> --}}
                    <input type="text" class="form-control citation-input" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="m-3 text-start">
                    <p class="card-text">Seleccione el servicio que desea:</p>
                    <select class="form-select form-select-lg citation-input" name="" id="">
                        <option value="-" selected>Seleccionar</option>
                        @foreach ($services as $item)
                            <option selected><strong>{{ $item->description }}:</strong> {{ $item->price }}₡</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="m-3 text-start">
                    <p class="card-text">¿Paga por adelantado el servicio?:</p>
                    <select class="form-select form-select-lg citation-input" name="" id="">
                        <option selected>Sí</option>
                        <option value="">No</option>
                    </select>
                </div>
                <div class="m-3 text-start">
                    <p class="card-text">Seleccione la imagen de su comprobante de pago Sinpe:</p>
                    <input type="file" class="form-control citation-input" id="nombre">
                </div> --}}
                <div class="m-3 text-start">
                    <input type="submit" class="form-control bg-dark citation-input text-light" value="Agendar cita">
                </div>
                <div class="m-5 text-start">
                    <p class="card-text">NOTA: Una vez envíe su cita el barbero deberá confirmarla. Al confirmarla le llegará un mensaje a su dispositivo indicandolo.</p>
                </div>
            </form>
        </div>

    </div>
    
@endsection