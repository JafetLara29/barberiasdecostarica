@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione la hora en la cual desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            
            <label class="display-5 text-light mb-3 mt-3 ">En la mañana:</label>
            <div class="row mt-5 d-flex justify-content-center flex-wrap">
                <a class="card day-card justify-content-center" style="color:black; text-decoration:none;" href="{{ route('citations.form', ['barber'=>$barber]) }}">
                    <p class="day-card-title">8:00 AM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">9:00 AM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">10:00 AM</p>
                </a>
                <a class="card day-card justify-content-center" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">11:00 AM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">12:00 AM</p>
                </a>
            </div>
            <label class="display-5 text-light mb-3 mt-5">En la tarde:</label>
            <div class="row mt-5 d-flex justify-content-center flex-wrap">
                <a class="card day-card justify-content-center" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">1:00 PM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">2:00 PM</p>
                </a>
                <a class="card day-card justify-content-center" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">3:00 PM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">4:00 PM</p>
                </a>
                <a class="card day-card justify-content-center" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">5:00 PM</p>
                </a>
                <a class="card day-card justify-content-center bg-info" style="color:black; text-decoration:none;" href="{{ route('citations.hours', ['barber'=>$barber]) }}">
                    <p class="day-card-title">6:00 PM</p>
                </a>
                    
            </div>
        
        </div>

    </div>
    
@endsection