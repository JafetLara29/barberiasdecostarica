@extends('layouts.public')
@section('content')
        <!-- End Slider Area -->
        <section class="pt-5 barbershop-section">
            <div class="atf-section-padding">
                {{-- Row para imagen de la ad --}}
                <div class="row justify-content-center">
                    <img src="https://lalista.admagazine.com/wp-content/uploads/2021/11/logo_LA-LISTA_COLOR.png" class="img-thumbnail ad-image" alt="Imagen publicitaria"/>
                </div>

                <div class="row mt-5 d-flex justify-content-center">
                    <a href="{{ route('citations.getBarbersToSelect', ['barbershop'=> $barbershop]) }}" class="btn btn-success btn-go-to-citation">Agendar cita</a>
                </div>

                {{-- Row para la informacion de la barberia y barberos --}}
                <div class="row mt-5 d-flex justify-content-center flex-wrap">
                    
                    {{-- Card para informacion de la barberia --}}
                    <div class="card m-2">
                        <h5 class="card-header barbershop-information-title"><ion-icon name="cut-outline"></ion-icon>Babashop</h5>
                        <div class="card-body">
                            <p class="barbershop-information-text"><strong><ion-icon name="location-outline"></ion-icon>Ubicación:</strong> {{ $barbershop->address }}</p>
                            <p class="barbershop-information-text"><strong><ion-icon name="calendar-number-outline"></ion-icon>Horario:</strong></p>
                            <ul class="barbershop-information-text">
                                @foreach ($schedule as $item)
                                    <li>{{ $item->day }}: {{ $item->start_time }} - {{ $item->end_time }}</li>
                                @endforeach
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
                                    @foreach ($barbers as $item)
                                        <div class="carousel-item {{ ($barbers->first())->id == $item->id ? 'active' : ''  }}">
                                            <img src="{{asset($item->image)}}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
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
                            @foreach ($services as $item)
                                <p class="barbershop-information-text"><ion-icon name="flame-outline"></ion-icon><strong>{{ $item->description }}:</strong> {{ $item->price }}₡</p>                        
                            @endforeach
                        </div>
                    </div>
        
                </div>

            </div>
        </section>    
@endsection