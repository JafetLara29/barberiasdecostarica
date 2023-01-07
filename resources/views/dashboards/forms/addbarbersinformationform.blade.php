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
                            <input type="text" name="name" id="name" class="form-control" placeholder="Escribe el nombre de tu barbero" required>
                            {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                          </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Imagen de perfil</label>
                                <div class="form-group">
                                  <label for="image">Seleccione una imagen para el perfil de su barbero:</label>
                                  <input type="file" class="form-control" name="image" id="image" required>
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
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Lunes
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Martes
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Miércoles
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Jueves
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Viernes
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Sabado
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input" type="checkbox" value="" id="">
                              Domingo
                            </div>
                            de: <input type="time" name="start-time" id="start-time">
                            a:  <input type="time" name="end-time" id="end-time">
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
                              <input class="form-check-input me-1" type="checkbox" value="">
                              <ion-icon size="large" name="call-outline"></ion-icon>
                              <input class="form-control" type="text" name="phone" placeholder="Escriba su número de teléfono">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              <ion-icon size="large" name="logo-whatsapp"></ion-icon>
                              <input class="form-control" type="text" name="whatsapp" placeholder="Escriba su número de whatsapp">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              <ion-icon size="large" name="logo-facebook"></ion-icon>
                              <input class="form-control" type="text" name="facebook" placeholder="Nombre de su perfil">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              <ion-icon size="large" name="logo-instagram"></ion-icon>
                              <input class="form-control" type="text" name="instagram" placeholder="Nombre de su perfil">
                            </div>
                          </label>
                          {{-- Item --}}
                          <label class="list-group-item">
                            <div class="m-3">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              <ion-icon size="large" name="logo-tiktok"></ion-icon>
                              <input class="form-control" type="text" name="tiktok" placeholder="Escriba su perfil">
                            </div>
                          </label>
                          <div class="mb-3">
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <input onClick="save()" class="btn btn-outline-success" type="submit" value="Guardar">
        </div>
    </div>
<script>

function barbersave(){
    $.ajax({
        url: '/barbers/store/',
        type: 'POST',
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success) {
                //If saved the main info
                    schedulesave();
            } else {
                // Display an error message
                alert('An error occurred');
            }
        }
    });

}
function schedulesave(){
    $.ajax({
        url: 'pending (table needed)',
        type: 'POST',
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success) {
                // If saved the schedule
                socialmediasave();

            } else {
                // Display an error message
                alert('An error occurred');
            }
        }
    });

}
function socialmediasave(){
    $.ajax({
        url: '/socialmedia/store/',
        type: 'POST',
        dataType: 'json',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if (response.success) {
                // If store the social media info and all past forms info
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
                alert('An error occurred');
            }
        }
    });

}
</script>

@endsection
