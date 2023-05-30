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
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="auth-box card">
                            @if (session('status'))

                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="text-center">

                                <img class="logo"
                                    src="{{ asset('https://cdn.pixabay.com/photo/2020/09/06/22/58/scissors-5550322_960_720.png') }}"
                                    alt="logo.png" width="150" height="125">
                            </div>
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center text-light loginTitles ">Restablecer contraseña</h3>
                                    </div>
                                </div>
                                <div class="mb-3 form-primary ">
                                    <input id="email" type="email" class="colorsI @error('email') is-invalid @enderror text-light" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su correo electrónico">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-7 m-1">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-outline-danger">
                                                Enviar link de recuperación
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 m-1">
                                        <div class="d-grid">
                                            <a href="{{ route('welcome') }}" class="btn btn-dark">
                                                Salir
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
