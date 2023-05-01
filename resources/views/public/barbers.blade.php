@extends('layouts.public')
@section('content')
    <section class=" pt-5 barbershop-section">
        <div class="atf-section-padding">
            <div class="container-lg container text-center">
                <h1 class="text-light title text-center">Seleccione el barbero con quien desea agendar</h1>
                {{-- Row --}}
                <div class="row mt-5 d-flex justify-content-center flex-wrap">
                    {{-- Esta parte se ejecuta si vienen registros de la db --}}
                    @foreach ($barbers as $item)
                        <div class="barber-card-container">
                            <a class="card barber-card justify-content-center align-items-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.schedule', ['barber'=>$item->id]) }}">
                                <img class="rounded-circle" src="{{ asset($item->image) }}"/>
                            </a>
                            <p class="card-text text-light">
                                {{ $item->name }}
                            </p>
                        </div>
                    @endforeach
                    {{-- BARBERO QUEMADO PARA TERMINOS DE TERMINAR EL FRONTEND --}}
                    {{-- <a class="card barber-card justify-content-center align-items-center rounded-circle" style="color:black; text-decoration:none;" href="{{route('citations.schedule')}}">
                        <img class="rounded-circle" src="{{asset('/storage/welcome_images/pic-1.png')}}"/>
                    </a>
                    <p class="card-text text-light">
                        Jafet Lara
                    </p> --}}
                    
                </div>
    
            </div>
        </div>
    </section>
@endsection