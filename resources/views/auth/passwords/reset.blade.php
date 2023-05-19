@extends('layouts.auth')

@section('content')
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block h-100 d-flex align-items-center">
        <!-- Container-fluid starts -->
        <div class="container-fluid ">
            <div class="row">
                <div class="card-shappe col-sm-8">
                    <!-- Authentication card start -->
                    <div class="p-3  " >
                        <form class="md-float-material form-material " method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-light">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="colorsI @error('email') is-invalid @enderror text-light" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-light">Contraseña</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="colorsI @error('password') is-invalid @enderror text-light" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-light">Confirmar contraseña</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="colorsI text-light" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cambiar contraseña
                                    </button>
                                    <a href="{{ route('welcome') }}" class="btn btn-dark">
                                        Salir
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection
