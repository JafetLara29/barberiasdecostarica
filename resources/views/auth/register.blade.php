@extends('layouts.auth')

@section('content')
<form id="msform" method="POST" action="{{ route('register') }}">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Cuenta</li>
        <li>Contacto</li>
        <li>Detalles</li>
    </ul>
    <!-- fieldsets -->
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2018/03/26/18/20/man-3263509__340.png" alt="logo.png">
            
            <h2 class="fs-title">Registro de barbería</h2>
            <h3 class="fs-subtitle">Comencemos con la creación de tu cuenta</h3>
            <div class="input-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electrónico">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
            </div>
            <button type="button" name="next" class="btn btn-primary next" value="Next">Siguiente</button>
            <a class="btn btn-primary text-light" href="{{ url('/') }}">Salir</a>
        </fieldset>
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2018/03/26/18/20/man-3263509__340.png" alt="logo.png">
            
            <h2 class="fs-title">Información de contacto</h2>
            <h3 class="fs-subtitle">Dinos un poco más sobre tu barbershop</h3>
            <div class="input-group">
                <input type="text" class="form-control" name="phone" placeholder="Número de telefono" />
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous">Anterior</button>
            <button type="button" name="next" class="btn btn-primary next" value="Next">Siguiente</button>
            
        </fieldset>
        <fieldset>
            <img class="logo" src="https://cdn.pixabay.com/photo/2020/09/06/22/58/barbershop-5550320_960_720.png" alt="logo.png">
            <h2 class="fs-title">Sobre tu barbershop</h2>
            <h3 class="fs-subtitle">Para tus clientes</h3>
            <div class="input-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de la barbería">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input class="form-control" type="text" name="canton" id="canton" placeholder="Canton donde se localiza">
            </div>
            <div class="input-group">
                <textarea name="address" class="form-control" placeholder="Escriba la dirección de la barbería"></textarea>
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous">Anterior</button>
            <button type="button" name="next" class="btn btn-primary" value="submit">Enviar</button>
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
