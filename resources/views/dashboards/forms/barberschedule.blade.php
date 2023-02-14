@extends('layouts.adminhome')
@section('content')

<body style="margin: 0;">
    <?php // include "../Shared/adminnavbar.php";$bussiness = new ScheduleBusiness(); ?>
    <!-- Contenedor del calendario -->
    <div class="scroll-area" id="calendar-container" >
        <div id="calendar" >

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 id="modal-title" class="modal-title">Programar evento en agenda</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="form" action="../../business/Admin/scheduleaction.php" method="post">
            <div class="modal-body">
              <div class="mb-3">
                <input type="hidden" name="id" id="id" class="form-control" placeholder="id">
                <label for="id" class="form-label"></label>
              </div>
              <div class="mb-3">
                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo">
                <label for="title" class="form-label"></label>
              </div>
              <div class="mb-3">
                <textArea name="detail" id="detail" class="form-control" placeholder="Detalle de la actividad"></textArea>
                <label for="detail" class="form-label"></label>
              </div>
              <div class="mb-3">
                <input type="date" name="start" id="start" class="form-control">
                <label for="start" class="form-label"></label>
              </div>
              <div class="mb-3">
                Escoja un color:
                <input type="color" name="color" id="color" class="form-control">
                <label for="color" class="form-label"></label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" id="btn-action">Guardar</button>
              <button type="button" class="btn btn-danger" id="btn-delete">Eliminar</button>
            </div>
          <!-- Variables hidden -->
          <input type="hidden" id="action" name="action" value="save">
          </form>
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
       let view = "schedule";
    // var myModal = new bootstrap.Modal(document.getElementById('mymodal'));
    //   let form_ = document.getElementById("form");
    //   var events_ = <?php // echo json_encode($bussiness->getAllEvents(), JSON_UNESCAPED_UNICODE);?>;

    </script>

</body>

@endsection
