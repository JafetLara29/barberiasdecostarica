@extends('layouts.adminhome')
@section('content')
    <div class="scroll-area">
        <div class="card shadow mb-5">
            <h1>Información de Barbero</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Información general
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="mb-3">
                          <small class="text-muted">LLene los campos vacios seleccionandolos y al finalizar precione el botón "Guardar"</small>
                        </div>
                        <form id="general-info" action="" method="post">
                          <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Barbero</label>
                            <input id="barbername" type="text" name="name" class="form-control" placeholder="Escribe el nombre de tu barbero" required>
                            {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                          </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Imagen de perfil</label>
                                <div class="form-group">
                                  <label for="image">Seleccione una imagen para el perfil de su barbero:</label>
                                  <input type="file" class="form-control" name="image" id="imputimage" required>

                                </div>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Información del horario
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <small class="text-muted">Marque los días en que su barbero viene a trabajar:</small>
                        <form id="schedule-info" class="list-group" action="" method="post">
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" name="day[]" type="checkbox" value="lunes" id="monday-checkbox">
                              Lunes
                            </div>
                            de: <input id="monday-start" type="time" name="start[]" >
                            a:  <input id="monday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input"  name="day[]" type="checkbox" value="martes" id="tuesday-checkbox">
                              Martes
                            </div>
                            de: <input id="tuesday-start" type="time" name="start[]" >
                            a:  <input id="tuesday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input"  name="day[]" type="checkbox" value="miercoles" id="Wednesday-checkbox">
                              Miércoles
                            </div>
                            de: <input id="Wednesday-start" type="time" name="start[]" >
                            a:  <input id="Wednesday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input"  name="day[]" type="checkbox" value="jueves" id="thursday-checkbox">
                              Jueves
                            </div>
                            de: <input id="thursday-start" type="time" name="start[]" >
                            a:  <input id="thursday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input"  name="day[]" type="checkbox" value="viernes" id="friday-checkbox">
                              Viernes
                            </div>
                            de: <input id="friday-start" type="time" name="start[]" >
                            a:  <input id="friday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input"  name="day[]" type="checkbox" value="sabado" id="saturday-checkbox">
                              Sabado
                            </div>
                            de: <input id="saturday-start" type="time" name="start[]" >
                            a:  <input id="saturday-end" type="time" name="end[]" >
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" name="day[]" type="checkbox" value="domingo" id="sunday-checkbox">
                              Domingo
                            </div>
                            de: <input id="sunday-start" type="time" name="start[]">
                            a:  <input id="sunday-end" type="time" name="end[]">
                          </label>
                        </form>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Información de contacto
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="list-group">
                        <form id="socialmedia-info" action="" method="post">
                            <div class="mb-3">
                                <small class="text-muted">"Marque y llene los campos con la información de redes y contacto para el barbero (Puede agregar un link a las redes si lo desea)"</small>
                            </div>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input id="phone-checkbox" class="form-check-input me-1" name="type[]" type="checkbox" value="Telefono">
                              <ion-icon size="large" name="call-outline"></ion-icon>
                              <input id="phone-input" class="form-control" type="text" name="data[]" placeholder="Escriba su número de teléfono">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input id="whatsapp-checkbox" class="form-check-input me-1"name="type[]" type="checkbox" value="Whatsapp">
                              <ion-icon size="large" name="logo-whatsapp"></ion-icon>
                              <input id="whatsapp-input" class="form-control" type="text" name="data[]" placeholder="Escriba su número de whatsapp">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input id="facebook-checkbox" class="form-check-input me-1" name="type[]" type="checkbox" value="facebook">
                              <ion-icon size="large" name="logo-facebook"></ion-icon>
                              <input id="facebook-input" class="form-control" type="text" name="data[]" placeholder="Nombre de su perfil">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input id="insta-checkbox" class="form-check-input me-1" name="type[]" type="checkbox" value="Instagram">
                              <ion-icon size="large" name="logo-instagram"></ion-icon>
                              <input id="insta-input" class="form-control" type="text" name="data[]" placeholder="Nombre de su perfil">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input id="tiktok-checkbox" class="form-check-input me-1" name="type[]" type="checkbox" value="Tiktok">
                              <ion-icon size="large" name="logo-tiktok"></ion-icon>
                              <input id="titktok-input" class="form-control" type="text" name="data[]" placeholder="Escriba su perfil">
                            </div>
                          </label>
                          <div class="mb-3">
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div >
              </div>
              <br>
              <input onClick="barberValidate()" class="btn btn-outline-success" type="submit" value="Guardar">
        </div>
    </div>
<script>
 // making validations on the checkboxes to ensure that something is coming from imputs of every form
function barberValidate(){
    if($('#barbername').val()!=''&& $('#inputimage').val()!=0){

        scheduleValidate();
}else{
    Toastify({
                    text: "Debe llenar los campos requeridos !!!!!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right, yellow,orange)",
                    },

                }).showToast();
}

}
function scheduleValidate(){
    if($('#monday-checkbox').prop('checked')||$('#tuesday-checkbox').prop('checked')||$('#wednesday-checkbox').prop('checked')||$('#thursday-checkbox').prop('checked')||$('#friday-checkbox').prop('checked')||$('#saturday-checkbox').prop('checked')||$('#sunday-checkbox').prop('checked')){

        socialmediaValidate();
    }else{
        Toastify({
                    text: " Debe de seleccionar al menos un dia a trabajar!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right,  yellow,orange)",
                    },

                }).showToast();
    }
}
function socialmediaValidate(){

    if($('#phone-checkbox').prop('checked')||$('#whatsapp-checkbox').prop('checked')||$('#facebook-checkbox').prop('checked')||$('#insta-checkbox').prop('checked')||$('#tiktok-checkbox').prop('checked')){


        barbersave();

    }else{
        Toastify({
                    text: "Debe de marcar al menos una opcion de contacto!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right,  yellow,orange)",
                    },

                }).showToast();
    }


}
// Since we validate the info we can proceed to save it in the next schema : [Barber->schedule->socialmedia]
function barbersave(){
    //Collecting the info from the general-info form
    var htmlForm = document.getElementById('general-info');
        var form = new FormData(htmlForm);

    $.ajax({
        url: '/barbers',
        type: 'POST',
        data: form ,
        dataType: 'json',
        processData: false,
        contentType: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success ==true && response.id !='') {

                 // If we receipt the corresponding data from backend we proceed to save the info and let the pass to the next method

                schedulesave(response.id);

            } else {
                Toastify({
                    text: "Un error ha ocurrido al guardar el nombre y perfil de su barbero !",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right, red, red)",
                    },

                }).showToast();
            }
        }
    });

}
function schedulesave(id){
    //Collecting the info from the schedule-info form
    var htmlForm = document.getElementById('schedule-info');
        var form = new FormData(htmlForm);
        form.append("barber_id",id);


    $.ajax({
        url: '/schedule',
        type: 'POST',
        data: form,
        dataType: 'json',
        processData: false,
        contentType: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success ==true && response.id !='') {
                // If we receipt the corresponding data from backend we proceed to save the info and let the pass to the next method
                socialmediasave(response.id);

            } else {
                Toastify({
                    text: "Un error ha ocurrido al guardar el horario !",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right, red, red)",
                    },

                }).showToast();
            }
        }
    });

}
function socialmediasave(id){
    //Collecting the info from the socialmedia-info form
    var htmlForm = document.getElementById('socialmedia-info');
        var form = new FormData(htmlForm);
        form.append("barber_id",id);

    $.ajax({
        url: '/socialmedia',
        type: 'POST',
        data: form ,
        dataType: 'json',
        processData: false,
        contentType: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success) {


                // If we receipt the corresponding data from backend we proceed to save the info and show the success message
                Toastify({
                    text: "Información guardada exitosamente !!!!!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right, green, green)",
                    },

                }).showToast();


            } else {
                // Display an error message
                Toastify({
                    text: "Un error ha ocurrido !!!!!",
                    duration: 5000,
                    gravity: "top",
                    position: "center",
                    style: {
                        background:  "linear-gradient(to right, red, red)",
                    },

                }).showToast();
            }
        }
    });

}
</script>

@endsection
