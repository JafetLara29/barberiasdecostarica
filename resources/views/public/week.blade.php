@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione el día en que desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            @foreach ($schedules as $item)
                <div class="day-card-container gold-background rounded-circle d-flex justify-content-center align-items-center m-2">
                    <a class="card day-card justify-content-center align-items-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.getHoursByBarber', ['schedule'=>'1']) }}">
                        <p class="day-card-title">{{ $item->day }}</p>
                    </a>
                </div>
            @endforeach

        </div>

    </div>
    
@endsection