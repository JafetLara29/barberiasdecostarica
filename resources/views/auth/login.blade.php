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
    <section class="login-block mx-auto">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material d-flex align-items-center justify-content-center" style="height: 100vh;" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="auth-box card">
                            <div class="text-center">
                                <img class="logo" src="{{ asset('https://cdn.pixabay.com/photo/2020/09/06/22/58/scissors-5550322_960_720.png') }}" alt="logo.png" width="150" height="125">
                            </div>
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center text-light loginTitles">@lang('messages.login_title')</h3>
                                    </div>
                                </div>
                                <p class="text-center p-b-5 text-light loginTitles">@lang('messages.enter_credentials')</p>
                                <div class="mb-3 form-primary">
                                    <input id="email" type="email" class="colorsI @error('email') is-invalid @enderror text-light" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('messages.username_placeholder')">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-primary">
                                    <input id="password" type="password" class="colorsI @error('password') is-invalid @enderror text-light" name="password" required autocomplete="current-password" placeholder="@lang('messages.password_placeholder')">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-8 mb-2">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-outline-success">
                                                @lang('messages.login_button')
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid">
                                            <a href="{{ route('welcome') }}" class="btn btn-outline-danger">
                                                @lang('messages.logout_link')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <a href="{{ route('register') }}" class="btn btn-info">
                                                @lang('messages.register_link')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <a href="{{ route('password.request') }}" class="btn btn-outline-light">
                                                @lang('messages.recover_password_link')
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
