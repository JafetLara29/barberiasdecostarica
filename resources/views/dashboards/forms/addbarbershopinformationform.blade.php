@extends('layouts.adminhome')
@section('content')
    <div class="scroll-area">
        <div class="card shadow mb-5">
            <h1>Información de tu barbería</h1>
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
                          <small class="text-muted">Si desea cambiar alguno de los siguientes datos solo escriba en los campos de texto el valor nuevo y seleccione el botón "Cambiar"</small>
                        </div>
                        <form action="" method="post">
                          <div class="mb-3">
                            <label for="name" class="form-label">Nombre de la barbería</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Escribe el nombre de tu barbería">
                            {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                          </div>
                          <div class="mb-3">
                            <label for="ubication" class="form-label">Dirección</label>
                            <textarea name="ubication" id="ubication" class="form-control" placeholder="Escribe la dirección de tu barbería"></textarea>
                            {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                          </div>
                          <input class="btn btn-warning" type="submit" value="Cambiar datos">
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
                        <small class="text-muted">Maque los días en que su barbería abre:</small>
                        <form class="list-group" action="" method="post">
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
                          <input class="btn btn-success" type="submit" value="Guardar">
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
                        <form action="" method="post">
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
                            <input class="btn btn-success" type="submit" value="Guardar">
                          </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection