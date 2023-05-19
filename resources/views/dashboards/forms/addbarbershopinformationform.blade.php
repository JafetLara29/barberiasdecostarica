@extends('layouts.adminhome')
@section('content')
    <div class="">
        <div class="card shadow mb-5">
          <h1 class="container-fluid pt-2">Información de tu barbería</h1>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <form action="" method="post" id="form">
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
                        <div class="mb-3">
                          <label for="name" class="form-label">Nombre de la barbería</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Escribe el nombre de tu barbería">
                          {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">Logo</label>
                          <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="address" class="form-label">Dirección</label>
                          <textarea name="address" id="address" class="form-control" placeholder="Escribe la dirección de tu barbería"></textarea>
                          {{-- <small id="name-description" class="text-muted">Help text</small> --}}
                        </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree" aria-expanded="false"
                          aria-controls="flush-collapseThree">
                          Información de contacto
                      </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse"
                      aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          <div class="list-group">
                                  <div class="mb-3">
                                      <small class="text-muted">"Marque y llene los campos con la información de redes y
                                          contacto para el barbero (Puede agregar un link a las redes si lo
                                          desea)"</small>
                                  </div>
                                  {{-- Item --}}
                                  <label class="list-group-item">
                                      <div class="m-3">
                                          <input id="phone-checkbox" class="form-check-input me-1" name="type[]"
                                              type="checkbox" value="phone">
                                          <ion-icon size="large" name="call-outline"></ion-icon>
                                          <input id="phone-input" class="form-control" type="text" name="data[]"
                                              placeholder="Escriba su número de teléfono" value="">
                                      </div>
                                  </label>
                                  {{-- Item --}}
                                  <label class="list-group-item">
                                      <div class="m-3">
                                          <input id="whatsapp-checkbox" class="form-check-input me-1"name="type[]"
                                              type="checkbox" value="whatsapp">
                                          <ion-icon size="large" name="logo-whatsapp"></ion-icon>
                                          <input id="whatsapp-input" class="form-control" type="text"
                                              name="data[]" placeholder="Escriba su número de whatsapp"
                                              value="">
                                      </div>
                                  </label>
                                  {{-- Item --}}
                                  <label class="list-group-item">
                                      <div class="m-3">
                                          <input id="facebook-checkbox" class="form-check-input me-1" name="type[]"
                                              type="checkbox" value="facebook">
                                          <ion-icon size="large" name="logo-facebook"></ion-icon>
                                          <input id="facebook-input" class="form-control" type="text"
                                              name="data[]" placeholder="Nombre de su perfil" value="">
                                      </div>
                                  </label>
                                  {{-- Item --}}
                                  <label class="list-group-item">
                                      <div class="m-3">
                                          <input id="insta-checkbox" class="form-check-input me-1" name="type[]"
                                              type="checkbox" value="insta">
                                          <ion-icon size="large" name="logo-instagram"></ion-icon>
                                          <input id="insta-input" class="form-control" type="text" name="data[]"
                                              placeholder="Nombre de su perfil" value="">
                                      </div>
                                  </label>
                                  {{-- Item --}}
                                  <label class="list-group-item">
                                      <div class="m-3">
                                          <input id="tiktok-checkbox" class="form-check-input me-1" name="type[]"
                                              type="checkbox" value="tiktok">
                                          <ion-icon size="large" name="logo-tiktok"></ion-icon>
                                          <input id="titktok-input" class="form-control" type="text" name="data[]"
                                              placeholder="Escriba su perfil" value="">
                                      </div>
                                  </label>
                                  <div class="mb-3">
                                  </div>

                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </form>
            <br>
            <input onClick="validate()" class="btn btn-outline-success" type="button" value="Guardar">
        </div>
    </div>
@endsection
@section('custom-scripts')
    <script>
      function validate(){
        // Obtenemos el formulario en html
        const form = document.getElementById('form');
        // Creamos un objeto que nos va almacenar toda la informacion del formulario para poder agregar o modificarla
        let data = new FormData(form);

        if(data.get('name') != '' && data.get('image').name != '' && data.get('address') != ''){
            if(socialmediaValidate() == true){
              console.log('Vamo');
              saveBarbershop(data);
            }
        }else{
          Toastify({
              text: `Debe agregar información correspondiente a la barbershop (Informacion general)!`,
              duration: 5000,
              gravity: "top",
              position: "center",
              style: {
                  background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                  color: "black", // Color del texto en negro para mayor contraste
                  fontWeight: "bold", // Negrita en el texto
                  boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
              },
          }).showToast();
        }
      }

      function socialmediaValidate() {
          const checkboxes = [
              '#phone-checkbox',
              '#whatsapp-checkbox',
              '#facebook-checkbox',
              '#insta-checkbox',
              '#tiktok-checkbox'
          ];
          const contacts = ['Telefono', 'Whatsapp', 'Facebook', 'Instagram', 'Tiktok'];

          let isChecked = false; // Variable para verificar si al menos un checkbox está seleccionado

          for (let i = 0; i < checkboxes.length; i++) {
              const checkbox = $(checkboxes[i]);
              const input = $('#' + checkbox.val() + '-input'); // Se utiliza jQuery para obtener el elemento input

              if (checkbox.is(":checked")) {
                  isChecked = true; // Se marca la variable como true si al menos un checkbox está seleccionado

                  if (input.val() === '') {
                      const contact = contacts[i]; // Obtener el nombre del contacto en español

                      Toastify({
                          text: `Debe agregar información correspondiente al canal de contacto seleccionado: ${contact}!`,
                          duration: 5000,
                          gravity: "top",
                          position: "center",
                          style: {
                              background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                              color: "black", // Color del texto en negro para mayor contraste
                              fontWeight: "bold", // Negrita en el texto
                              boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                          },
                      }).showToast();
                      return false; // Se retorna false para evitar el envío del formulario y salir de la función
                  }
              }
          }

          if (!isChecked) {
              Toastify({
                  text: "Debe seleccionar al menos una opción de contacto y agregar su información correspondiente!",
                  duration: 5000,
                  gravity: "top",
                  position: "center",
                  style: {
                      background: "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                      color: "black", // Color del texto en negro para mayor contraste
                      fontWeight: "bold", // Negrita en el texto
                      boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                  },
              }).showToast();
              return false; // Se retorna false para evitar el envío del formulario
          }

          // Si los checkboxes seleccionados y los inputs están llenos, se ejecuta la función barbersave()
          return true;
      }

      function saveBarbershop(data){
        console.log('VA');
        $.ajax({
          type: "POST",
          url: "/barbershops",
          data: data,
          dataType: "json",
          processData: false,
          contentType: false,
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (response) {
            
          }
        });
      }
    </script>
@endsection
