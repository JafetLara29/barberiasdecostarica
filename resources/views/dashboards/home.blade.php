@extends('layouts.adminhome')

@section('content')
<div class="h-100" style="background-image:url('storage/welcome_images/admin-bg.jpg')">

    <div class="text-center ">

        <div class="col d-flex justify-content-center">
            <div class="col-md-8">
                
                <div class="card-body">


                    <div class="bg-text bg-card">
                        @if (session('status') && session('status') == "Your password has been reset!")
                            <div class="alert alert-success" role="alert">
                                Contraseña restablecida exitosamente
                            </div>
                        @endif

                        <div text-align: center class="py-3">
                            <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle">
                            <h3>
                                <strong>{{ Auth::user()->name }}</strong>
                            </h3>

                            <h5>Bienvenido al Dashboard!</h5>
                            Despliega el menu y escoge la opción que deseas
                            
                        </div>
                    </div>
                </div> 
                
            </div>
        </div> 
    </div>
</div>
@endsection
