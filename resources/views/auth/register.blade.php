@extends('layouts.auth')

@section('content')
<form id="msform" method="POST" action="{{ route('register') }}">
    @csrf
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Cuenta</li>
        <li>Contacto</li>
        <li>Detalles</li>
    </ul>
    <!-- fieldsets -->
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2018/03/26/18/20/man-3263509__340.png" alt="logo.png">

            <h2 class="fs-title1">Registro de barbería</h2>
            <h3 class="fs-subtitle1">Comencemos con la creación de tu cuenta</h3>
            <div class="input-group">
                <input id="email" type="email" class="colorsI @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Correo electrónico">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password" type="password" class="colorsI @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password-confirm" type="password" class="colorsI" name="password_confirmation" autocomplete="new-password" placeholder="Confirmar contraseña">
            </div>
            <button type="button" name="next" class="btn btn-outline-danger colorBtn next" value="Next">Siguiente</button>
            <a class="btn btn-outline-danger text-light  " href="{{ url('/') }}">Salir</a>
        </fieldset>
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2014/04/02/10/38/telephone-304080_960_720.png" alt="logo.png">

            <h2 class="fs-title1 ">Información de contacto</h2>
            <h3 class="fs-subtitle1">Dinos un poco más sobre tu barbershop</h3>
            <div class="input-group">
                <input type="text" class="colorsI @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Número de telefono" />
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="button" name="previous" class=" btn btn-outline-danger colorBtn previous"
                value="Previous">Anterior</button>
            <button type="button" name="next" class="btn btn-outline-danger colorBtn next" value="Next">Siguiente</button>

        </fieldset>
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2020/09/06/22/58/barbershop-5550320_960_720.png" alt="logo.png">
            <h2 class="fs-title1">Sobre tu barbershop</h2>
            <h3 class="fs-subtitle1">Para tus clientes</h3>
            <div class="input-group">
                <input id="name" type="text" class="colorsI @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nombre de la barbería">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input class="colorsI @error('canton') is-invalid @enderror" type="text" name="canton" id="canton" value="{{ old('canton') }}" placeholder="Canton donde se localiza">
                @error('canton')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <textarea name="address" class="colorsI @error('address') is-invalid @enderror" placeholder="Escriba la dirección de la barbería">{{ old('address') }}</textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <h3 class="fs-subtitle1">Antes de enviar la solicitud de registro debe tener en cuenta lo siguiente:</h3>
            <div class="text-start mb-3">
                <p>1. Para activar su cuenta debe realizar el pago correspondiente a la primer mensualidad antes de que culminen las 24 horas despues de enviado su registro.</p>
                <p>2. El pago actualmente se maneja por medio de sinpe al numero 61051138. Numero del proveedor de este servicio (Rolbin Jafet Lara Lopez).</p>
                <p>3. En la descripción del sinpe debe ir el nombre de la barbería que se está registrando. El nombre ingresado en la sección <strong>"Sobre tu barbershop"</strong> de este formulario.</p>
                <p>4. Una vez el proveedor valide tu pago procederá a activar tu cuenta y se te notificará al correo electrónico que brindaste.</p>
            </div>

            <button type="button" name="previous" class="btn btn-outline-danger colorBtn previous" value="Previous">Anterior</button>
            <button type="submit" class="btn btn-outline-danger colorBtn">Registrarme</button>
        </fieldset>
</form>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection
