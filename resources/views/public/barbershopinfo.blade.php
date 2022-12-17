@extends('layouts.public')
@section('content')
    <div class="container-lg container">
        {{-- Row para imagen de la ad --}}
        <div class="row justify-content-center">
            <img src="https://lalista.admagazine.com/wp-content/uploads/2021/11/logo_LA-LISTA_COLOR.png" class="img-thumbnail ad-image" alt="Imagen publicitaria"/>
        </div>
        {{-- Row para la informacion de la barberia y barberos --}}
        <div class="row mt-5 d-flex justify-content-center flex-wrap">
            
            {{-- Card para informacion de la barberia --}}
            <div class="card m-2">
                <h5 class="card-header barbershop-information-title"><ion-icon name="cut-outline"></ion-icon>Babashop</h5>
                <div class="card-body">
                    <p class="barbershop-information-text"><strong><ion-icon name="location-outline"></ion-icon>Ubicación:</strong> 10m norte de la parada de la villalobos, local comercial.</p>
                    <p class="barbershop-information-text"><strong><ion-icon name="calendar-number-outline"></ion-icon>Horario:</strong></p>
                    <ul class="barbershop-information-text">
                        <li>Lunes: 8:00am - 5:00pm</li>
                        <li>Martes: 8:00am - 5:00pm</li>
                        <li>Miercoles: 8:00am - 5:00pm</li>
                        <li>Jueves: 8:00am - 5:00pm</li>
                        <li>Viernes: 8:00am - 5:00pm</li>
                        <li>Sabado: 8:00am - 5:00pm</li>
                    </ul>

                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>

            {{-- Card para informacion de los barberos --}}
            <div class="card m-2">
                <h5 class="card-header barbershop-information-title"><ion-icon name="id-card-outline"></ion-icon>Barberos</h5>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('storage/welcome_images/barber.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('storage/welcome_images/barber.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('storage/welcome_images/barber.jpg')}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Card para informacion de los servicios de la barberia --}}
            <div class="card m-2">
                <h5 class="card-header barbershop-information-title"><ion-icon name="flame-outline"></ion-icon>Servicios</h5>
                <div class="card-body">
                    <p class="barbershop-information-text"><ion-icon name="flame-outline"></ion-icon><strong>Corte de cabello:</strong> 3500₡</p>
                    <p class="barbershop-information-text"><ion-icon name="flame-outline"></ion-icon><strong>Corte de cabello con corte de barba:</strong> 4500₡</p>
                    <p class="barbershop-information-text"><ion-icon name="flame-outline"></ion-icon><strong>Aplicación de keratina:</strong> 11500₡</p>
                    <p class="barbershop-information-text"><ion-icon name="flame-outline"></ion-icon><strong>Corte y cejas:</strong> 3500₡</p>
                    
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>

        </div>

    </div>
    
@endsection