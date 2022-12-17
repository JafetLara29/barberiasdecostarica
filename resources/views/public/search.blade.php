@extends('layouts.public')
@section('content')
    <div class="container-lg container">
        <label class="display-3 text-light mb-3">Busqueda de barbería</label>
        <div class="input-group mb-3">
            <span class="input-group-text search-icon"><ion-icon size="large" name="search"></ion-icon></span>
            <input type="text" class="form-control form-control-lg search" placeholder="Escribe el nombre de tu barbería aquí...">
        </div>
        <p class="display-4 text-light text-center">Resultados:</p>
        <div class="container-lg d-flex justify-content-center flex-wrap">

            {{-- card --}}
            <a href="{{ route('barbershop', ['barbershop'=> 1]) }}" class="a-card">
                <div class="card m-2 d-flex flex-wrap flex-row">
                    <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                        <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="search-result-title">Card title</h5>
                        <div class="d-flex align-items-center">
                            <ion-icon name="location-outline" size="large"></ion-icon>
                            <p class="search-result-text mx-3">Ubicación</p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            <div class="card m-2 d-flex flex-wrap flex-row">
                <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                    <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="search-result-title">Card title</h5>
                    <div class="d-flex align-items-center">
                        <ion-icon name="map-outline" size="large"></ion-icon>
                        <p class="search-result-text mx-3">Ubicación</p>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    
@endsection