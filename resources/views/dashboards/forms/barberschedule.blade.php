@extends('layouts.adminhome')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>

    <body>
        <?php // include "../Shared/adminnavbar.php";$bussiness = new ScheduleBusiness();
        ?>
        <!-- Contenedor del calendario -->
        <div class="scroll-area" id="calendar-container">
            <div id="calendar">

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"
                        style=" background: rgb(242,178,159);
                        background: linear-gradient(90deg, rgba(242,178,159,1) 0%, rgba(237,122,108,1) 50%, rgba(169,65,55,1) 90%); ">
                        <h4 class="modal-title" style="font-family: 'Roboto', sans-serif;" id="myModalLabel">Citas
                            Agendadas
                        </h4>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <!-- Aquí se agregará la tabla generada por la consulta AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button"  style="background-color:#019283; color:azure; "class="btn  btn-outline-success" data-dismiss="modal">Cerrar</button>

                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection

@section('custom-scripts')
    <script>
        let view = "admin";
    </script>
    @vite(['resources/js/schedules.js'])
@endsection
