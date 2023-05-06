@extends('layouts.adminhome')

@section('content')
<div class="scroll-area" style="background-image:url('storage/welcome_images/admin-bg.jpg')">

    <div class="text-center ">

        <div class="col d-flex justify-content-center">
            <div class="col-md-8">
                
                <div class="card-body">


                    <div class="bg-text bg-card">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div text-align: center class="nav-link py-3"  id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle">

                            <h5>{{ __('Bienvenido al Dashboard!') }}</h5>
                            <h3>
                                <strong>{{ Auth::user()->name }}</strong>
                            </h3>
                            {{ __('You are logged in!!') }}
                            
                        </div>
                    </div>
                </div> 
                
            </div>
        </div> 
    </div>
</div>
@endsection
