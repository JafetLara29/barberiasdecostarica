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
