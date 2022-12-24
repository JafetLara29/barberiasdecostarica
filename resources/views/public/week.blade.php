@extends('layouts.public')
@section('content')
    <div class="container-lg container text-center">
        <label class="display-3 text-light mb-3">Seleccione el día en que desea agendar</label>
        {{-- Row --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">

            {{-- Cards de los dias de la semana --}}
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Lunes</p>
                    
                </a>
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Martes</p>
                    
                </a>
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Miércoles</p>
                    
                </a>
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Jueves</p>
                    
                </a>
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Viernes</p>
                    
                </a>
                <a class="card day-card m-2 justify-content-center rounded-circle" style="color:black; text-decoration:none;" href="{{ route('citations.barbers', ['barbershop'=>$barbershop]) }}">
                    
                            <p class="day-card-title">Sabado</p>
                    
                </a>
        </div>

    </div>
    
@endsection