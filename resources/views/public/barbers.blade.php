@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione el barbero con quien desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            @foreach ($barbers as $item)
                <div class="barber-card-container">
                    <a class="card barber-card justify-content-center align-items-center rounded-circle" style="color:black; text-decoration:none;" href="{{route('citations.getcitationSchedule', ['barber'=>$item->id]) }}">
                        <img class="rounded-circle" src="{{asset($item->image)}}"/>
                    </a>
                    <p class="card-text text-light">
                        {{ $item->name }}
                    </p>
                </div>
            @endforeach
                
        </div>

    </div>
    
@endsection