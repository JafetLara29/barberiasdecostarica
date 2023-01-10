@extends('layouts.public')
@section('content')
    <div class="container-lg container">
        <label class="display-3 text-light mb-3">Busqueda de barbería</label>
        <div class="input-group mb-3">
            <span class="input-group-text search-icon"><ion-icon size="large" name="search"></ion-icon></span>
            <input type="text" class="form-control form-control-lg search" id="search-query" placeholder="Escribe el nombre de tu barbería aquí...">
        </div>
        <p class="display-4 text-light text-center">Resultados:</p>
        <div class="container-lg d-flex justify-content-center flex-wrap" id="search-result-container">
            <p class="search-result-text mt-5 text-light">Escriba algo en el input de busqueda</p>
        </div>
    </div>
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
                                array += `<a href="/barbershops/${ result.id }" class="a-card">
                                                <div class="card m-2 d-flex flex-wrap flex-row">
                                                    <div class="img-container d-flex justify-content-center align-items-center rounded-circle">
                                                        <img src="https://cdn.pixabay.com/photo/2012/04/18/00/32/barbershop-36290_960_720.png" alt="...">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="search-result-title">${ result.name }</h5>
                                                        <div class="d-flex align-items-center">
                                                            <ion-icon name="location-outline" size="large"></ion-icon>
                                                            <p class="search-result-text mx-3">${ result.ubication }</p>
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