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
                    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="auth-box card">
                            <div class="text-center">

                                <img class="logo"
                                    src="{{ asset('https://cdn.pixabay.com/photo/2020/09/06/22/58/scissors-5550322_960_720.png') }}"
                                    alt="logo.png" width="150" height="125">
                            </div>
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center text-light loginTitles ">Inicio de Sesión</h3>
                                    </div>
                                </div>
                                <p class="text-center p-b-5 text-light loginTitles ">Ingresa tus credenciales</p>
                                <div class="mb-3 form-primary ">
                                    <input id="email" type="email"
                                        class=" colorsI @error('email') is-invalid @enderror text-light" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Usuario">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 form-primary">
                                    <input id="password" type="password"
                                        class="colorsI @error('password') is-invalid @enderror text-light" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-8">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-outline-danger">
                                                Ingresar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid">
                                            <a href="{{ route('welcome') }}" class="btn btn-dark">
                                                Salir
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row m-t-25 text-start">
                                    <div class="col-12">
                                        <div class="forgot-phone text-end f-right">
                                            <a href="auth-reset-password.html" class="text-end f-w-600">Registrar mi barbershop</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <p class="text-inverse text-start text-light">¿No tienes una cuenta?<a href="{{ route('register') }}"> <b class="f-w-600">Registra tu barbershop</b></a>!</p>
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
