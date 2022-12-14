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
                    <p class="card-text">Ingrese el nombre del propietario(a) de la cita:</p>
                    <input type="text" class="form-control citation-input" id="nombre" placeholder="Ingrese el nombre">
                </div>
                <div class="m-3 text-start">
                    <p class="card-text">Seleccione el servicio que desea:</p>
                    <select class="form-select form-select-lg citation-input" name="" id="">
                        <option selected><strong>Corte de cabello:</strong> 3500₡</option>
                        <option value=""><strong>Corte de cabello con corte de barba:</strong> 4500₡</option>
                        <option value=""><strong>Aplicación de keratina:</strong> 11500₡</option>
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
                    <p class="card-text">NOTA: Una vez llene todos los datos y envíe su cita la persona que usted desea contratar deberá confirmar su cita.</p>
                </div>
            </form>
        </div>

    </div>
    
@endsection