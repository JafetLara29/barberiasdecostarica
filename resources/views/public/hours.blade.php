@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione la hora en la cual desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            <div class="row mt-5 d-flex justify-content-center flex-wrap">
                @php
                    $pm = false;
                @endphp
                @foreach ($hours as $item)
                    @php
                        if(stristr( $item, ":", true ) == 12){
                            $pm = true;
                        }
                    @endphp
                    <a class="card hours-card justify-content-center m-1" style="color:black; text-decoration:none;" href="{{ route('citations.form', ['barber'=>$barber, 'hour'=>$item]) }}">
                        <p class="day-card-title">{{ $pm == true ? $item.'PM' : $item.'AM'}}</p>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
    
@endsection