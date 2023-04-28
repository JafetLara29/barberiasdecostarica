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
                        style="background:
                    linear-gradient(135deg, #ECEDDC 25%, transparent 25%) -50px 0,
                    linear-gradient(225deg, #ECEDDC 25%, transparent 25%) -50px 0,
                    linear-gradient(315deg, #ECEDDC 25%, transparent 25%),
                    linear-gradient(45deg, #ECEDDC 25%, transparent 25%);
                  background-size: 100px 100px;
                  background-color: salmon;">
                        <h4 class="modal-title" style="font-family: 'Roboto', sans-serif;" id="myModalLabel">Citas
                            Agendadas
                        </h4>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <!-- Aquí se agregará la tabla generada por la consulta AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>

                </div>
            </div>
        </div>
        <!-- Para mensaje de registro -->
        <?php
      if(isset($_GET['r'])){
        if($_GET['r'] == 's'){
    ?>
        <script>
            swal(
                'Muy bien!',
                'Registro realizado con exito!!',
                'success'
            )
        </script>
        <?php
        }else{
    ?>
        <script>
            swal(
                'Aviso',
                'No se pudo realizar el registro, porfavor comuniquese con el desarrollador si el problema persiste',
                'warning'
            )
        </script>
        <?php
        }
      }
    ?>

        <!-- Para mensaje de editado -->
        <?php
      if(isset($_GET['e'])){
        if($_GET['e'] == 's'){
    ?>
        <script>
            swal(
                'Muy bien!',
                'Actualización realizada con exito!!',
                'success'
            )
        </script>
        <?php
        }else{
    ?>
        <script>
            swal(
                'Aviso',
                'No se pudo actualizar el registro, porfavor comuniquese con el desarrollador si el problema persiste',
                'warning'
            )
        </script>
        <?php
        }
      }
    ?>

        <?php
       if(isset($_GET['e'])){
           if($_GET['e'] == 'd'){ ?>
        <script>
            swal(
                'Muy bien!',
                'Eliminado con exito!',
                'success'
            )
        </script>
        <?php
           }
       }
    ?>


        <script>
            let view = "home1";
            // var myModal = new bootstrap.Modal(document.getElementById('mymodal'));
            //   let form_ = document.getElementById("form");
            //   var events_ = <?php // echo json_encode($bussiness->getAllEvents(), JSON_UNESCAPED_UNICODE);
            ?>;
        </script>

    </body>
@endsection
