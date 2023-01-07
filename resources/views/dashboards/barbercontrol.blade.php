@extends('layouts.adminhome')
@section('content')
    <div class="scroll-area pb-5">
        <div class="card login-card">
            <div class="card-header">
                <h2 data-aos="fade-right" data-aos-delay="500" class="display-5">Control de barberos</h2>
            </div>
            <a class="btn btn-outline-success mb-3" href="{{route('barbers.create')}}" role="button">Agregar</a>
            <div class="row align-items-center p-3 d-flex justify-content-center flex-wrap">
                {{-- Card --}}
                <div class="card barber-card m-2 p-2 shadow">
                    <div class="img-container rounded-circle d-flex justify-content-center">
                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                    </div>
                    <div class="text-center">
                        Rolbin Jafet Lara Lopez
                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                    </div>
                </div>
                {{-- Card --}}
                <div class="card barber-card m-2 p-2 shadow">
                    <div class="img-container rounded-circle d-flex justify-content-center">
                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                    </div>
                    <div class="text-center">
                        Rolbin Jafet Lara Lopez
                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                    </div>
                </div>
                {{-- Card --}}
                <div class="card barber-card m-2 p-2 shadow">
                    <div class="img-container rounded-circle d-flex justify-content-center">
                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                    </div>
                    <div class="text-center">
                        Rolbin Jafet Lara Lopez
                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                    </div>
                </div>
                {{-- Card --}}
                <div class="card barber-card m-2 p-2 shadow">
                    <div class="img-container rounded-circle d-flex justify-content-center">
                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                    </div>
                    <div class="text-center">
                        Rolbin Jafet Lara Lopez
                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                    </div>
                </div>
                {{-- Card --}}
                <div class="card barber-card m-2 p-2 shadow">
                    <div class="img-container rounded-circle d-flex justify-content-center">
                        <img class="img-thumbnail rounded-circle" src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg" alt="Imagen de barbero">
                    </div>
                    <div class="text-center">
                        Rolbin Jafet Lara Lopez
                        <a href="{{ route('services.index') }}" class="btn btn-outline-info mt-3">Administrar servicios</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script>
        var table;
        // Al levantar la vista ocultamos el form de editar
        document.getElementById('edit-module-form').style.setProperty('display', 'none');
        $(document).ready( function () {
            // Obtenemos los registro y los ponemos en la tabla
            // getAllModules();
        } );

        function getAllModules(){
           table = $('#modulesTable').DataTable({
                dom: 'Bfrtip',
                stateSave: true,
                pagingType: 'full_numbers',
                scrollY: '200px',
                scrollCollapse: true,
                language: {
                    lengthMenu: 'Mostrando _MENU_ filas por página',
                    zeroRecords: 'Nada que mostrar',
                    info: 'Página #_PAGE_ de _PAGES_',
                    infoEmpty: 'No hay coincidencias',
                    search: 'Buscar',
                    infoFiltered: '(Filtrado de _MAX_ registros)',
                },
                buttons: [
                    // 'copy',
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'excel',
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'pdf',
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    // 'print',
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'colvis',
                ],
                columnDefs: [ {
                    // targets: -1,
                    visible: false
                } ]
            });
        }

    </script>
@endsection
