@extends('layouts.auth')

@section('content')
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <!-- Resto del código del preloader -->
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block text-center">
        <div class="container">
            <!-- Quitamos un contenedor div para que el contenido se centre correctamente -->
            <div class="row justify-content-center align-items-center min-vh-100">
                <!-- Agregamos la clase "min-vh-100" para que el contenedor ocupe al menos el 100% del viewport en altura -->
                <div class="form-box mb-5">
                    <div class="form-value">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2 class="text-white">Barberías de Costa Rica</h2>
                            <h4 class="text-white mt-2">Bienvenido de nuevo !</h4>
                            <div class="form-group">
                                <div class="inputbox position-relative">
                                    <ion-icon name="mail-outline" class="text-white position-absolute"
                                        style="right: 8px; top: 20px;"></ion-icon>
                                    <input type="email"
                                        class="form-control custom-input @error('email') is-invalid @enderror" required
                                        oninput="checkInput(this)" autocomplete="username" name="email" id="email">
                                    <label class="text-white">Email/Usuario</label>
                                    @error('email')
                                        <div class="invalid-feedback p-1 m-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div class="inputbox position-relative flex-grow-1">
                                    <ion-icon name="lock-closed-outline" class="text-white position-absolute"
                                        style="right: 8px; top: 20px;"></ion-icon>
                                    <input type="password"
                                        class="form-control custom-input @error('password') is-invalid @enderror" required
                                        oninput="checkInput(this)" autocomplete="current-password" name="password"
                                        id="password">
                                    <label class="text-white">Contraseña</label>
                                    @error('password')
                                        <div class="invalid-feedback p-1 m-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-light btn-show-password"
                                    onclick="togglePasswordVisibility()"><i class="fa fa-eye"></i></button>
                            </div>
                            <div class="form-group form-check text-white d-flex justify-content-between">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input mt-0" id="recordarme" name="remember">
                                    <label class="form-check-label" for="recordarme">
                                        Recordarme
                                    </label>
                                </label>
                                <a href="{{ route('password.request') }}" class="forget mt-1">Olvidé mi contraseña</a>
                            </div>
                            <button type="submit" class="btn-danger btn-block">Inicia Sesión</button>
                            <div class="register text-white">
                                <p class="text-center">No tienes una cuenta? <a class="text-white btn-register "
                                        href="{{ route('subscriptions.form') }}">Registrate</a></p>
                                <br>
                                <p class="text-center pt-2"><a class="text-white btn-back"
                                        href="{{ route('welcome') }}">Salir</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container -->
    </section>
    <script>


        function checkInput(input) {
            const label = input.nextElementSibling;
            if (input.value !== '') {
                label.classList.add('active');
            } else {
                label.classList.remove('active');
            }
        }

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.btn-show-password i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.style.backgroundColor = "trasnsparent";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.style.backgroundColor = "trasnsparent";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
@endsection
