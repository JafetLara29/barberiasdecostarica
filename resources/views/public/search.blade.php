@extends('layouts.public')
@section('content')
    <section class="background">
        <!-- Start Slider Area -->
        <section id="atf-slider" class="atf-slider">
            <div class="swiper-container atf-parallax-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="atf-swiper-img atf-align-item-center" style="border-end-start-radius: 100px; border-start-end-radius: 100px" data-background="{{asset('/storage/public/assets/img/search/barber-tools.jpg')}}" data-overlay-dark="6">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 text-center">
                                        <div class="atf-slider-content">
                                            <h1>Busqueda de barberías</h1>
                                            {{-- <p>Implementa la tecnología en tu barbershop y sé parte de la comunidad.</p> --}}
                                            <div class="atf-main-btn mt-5">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text search-icon"><ion-icon size="large" name="search"></ion-icon></span>
                                                    <input type="text" class="form-control form-control-lg search" id="search-query" placeholder="Escribe el nombre de tu barbería aquí...">
                                                </div>
                                                <a class="atf-themes-btn" href="#search-results-section" data-hover="Ver resultados">
                                                    <span>Ver resultados</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider setting -->
            </div>
        </section>
        <!-- End Slider Area -->
        <section class="pt-2 search-results-section" id="search-results-section">
            <div class="atf-section-padding">
                <div class="d-flex justify-content-center flex-wrap" id="search-result-container">
                    <span class="text-muted">Ingresa el nombre de tu barbershop preferida...</span>
                </div>
            </div>
        </section>
    </section>

    <script>
        $(document).ready(function() {
            search();
        });

        // Metodo de busqueda
        const search = () => {
            $('#search-query').keyup(function(e){
                e.preventDefault();
                var query = $('#search-query').val();
                //var htmlForm = document.getElementById('search-form');
                //var form = new FormData(htmlForm);
                $.ajax({
                    type: "POST",
                    url: '/barbershops/search',
                    data: query,
                    processData: false,
                    contentType: false,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    dataType: "json",
                    success: function(results) {
                        let array='';
                        if($('#search-query').val()==''){
                            array='<h5 class="search-result-title text-light">Nada que mostrar</h5>';
                        }else{
                            $('#search-result-container').html('');
                            $.each(results, function(index, result) {
                                // d-flex flex-wrap flex-row
                                array += `<a href="/barbershops/${ result.id }" class="a-card">
                                                <div class="card m-2 d-flex flex-row">
                                                    <div class="img-container d-flex justify-content-center align-items-center">
                                                        <img src="https://cdn.pixabay.com/photo/2020/09/06/22/58/barbershop-5550320_960_720.png" alt="...">
                                                    </div>
                                                    <div class="card-body search-result-card-body">
                                                        <h5 class="search-result-title">${ result.name }</h5>
                                                        <div class="d-flex align-items-center">
                                                            <ion-icon name="location-outline" size="large"></ion-icon>
                                                            <p class="search-result-text mx-3">${ result.canton }</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>`;
                            });
                        }
                        $('#search-result-container').html(array);
                    }
                });
            });
        }
    </script>
@endsection