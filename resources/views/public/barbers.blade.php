@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione el barbero con quien desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">

            {{-- Cards de los dias de la semana --}}
            <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                <img class="rounded-circle" src="{{asset('storage/welcome_images/pic-1.png')}}"/>
            </a>
            <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                <img class="rounded-circle" src="{{asset('storage/welcome_images/pic-1.png')}}"/>
            </a>
            <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                <img class="rounded-circle" src="{{asset('storage/welcome_images/pic-1.png')}}"/>
            </a>
            <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                <img class="rounded-circle" src="{{asset('storage/welcome_images/pic-1.png')}}"/>
            </a>
                
        </div>

    </div>
    
@endsection