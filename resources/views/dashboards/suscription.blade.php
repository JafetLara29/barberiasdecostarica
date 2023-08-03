<!DOCTYPE html>
<html>
<head>

  @vite(['resources/css/suscriptionstyle.css'])

  <title>Pasarela de Suscripción</title>
</head>
<body style="background:url('https://images.pexels.com/photos/6353659/pexels-photo-6353659.jpeg'); background-size: cover; background-repeat: no-repeat!important; height: 100%; display: flex; justify-content: center; align-items: center; margin: 0; padding: 0; height: 100%; overflow: hidden;">
  <div> 
    <div class="container">
      <div id="subscription-status" class="alert" style="display: none;"></div>
      <div>
        <form class="form-car" id="subscription-form" method="POST" action="{{ route('subscriptions.create') }}" onsubmit="return createSubscription(event)">
          @csrf
          
          <h1 style="text-align: center">Pasarela de Suscripción</h1>
          
          <div class="form-group">
            <div class="input-space">
              <label for="name" id="name-label">Nombre:</label>
              <input type="text" id="name" name="name" required>
            </div>
          </div>

          <div class="form-group">
            {{-- <label for="email">Correo electrónico:</label> --}}
            <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
          </div>

          <div class="form-group">
            {{-- <label for="barbers">Cantidad de barberos:</label> --}}
            <select id="barbers" name="barbers" required>
              <option value="">Seleccionar el paquete de barberos</option>
              <option value="1">1 barbero ($5000/mes)</option>
              <option value="2">2-3 barberos ($7000/mes)</option>
              <option value="3">4-6 barberos ($10000/mes)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="card-element">
              {{-- Tarjeta de crédito: --}}
            </label>
            <div id="card-element" class="card-input"></div>
            <div id="card-errors" class="card-errors" role="alert"></div>
          </div>

          <div style="display: flex; justify-content: center;">
            <button type="submit" style="background-color: salmon; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
              Suscribirse
            </button>
          </div>
        </form>
      </div>  
    </div>
  </div>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    var stripe = Stripe('pk_test_51NLptDFqcjWSUH4kd9ifw24ui4ydBYJ455Dp9nthFjCArI5qPzZbUE9inQnOYzwdhkAoXjH1hL1bhAQOMAbZmtmR00nVT9KxN3'); // Reemplaza 'pk_test_...' con tu clave pública de Stripe

    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    // Maneja los errores de validación de la tarjeta
    cardElement.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    function createSubscription(event) {
      event.preventDefault();
      // Valida el formulario antes de enviarlo
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var barbers = document.getElementById('barbers').value;

      if (!name || !email || !barbers) {
        showAlert('Todos los campos son obligatorios', 'alert-danger');
        return false;
      }

      stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
          showAlert(result.error.message, 'alert-danger');
        } else {
          // Envía el formulario con el token de la tarjeta y otros datos
          var form = document.getElementById('subscription-form');
          var tokenInput = document.createElement('input');
          tokenInput.type = 'hidden';
          tokenInput.name = 'stripeToken';
          tokenInput.value = result.token.id;
          form.appendChild(tokenInput);
          form.submit();
        }
      });
    }

    function showAlert(message, className) {
      // Obtiene el elemento de alerta por su ID
      var alertElement = document.getElementById('subscription-status');

      // Establece el texto de la alerta como el mensaje proporcionado
      alertElement.textContent = message;

      // Establece la clase de la alerta como la clase proporcionada
      // Esto permite aplicar estilos diferentes a diferentes tipos de alertas
      alertElement.className = 'alert ' + className;

      // Muestra la alerta estableciendo la propiedad display en 'block'
      // Esto asegura que la alerta sea visible en la página
      alertElement.style.display = 'block';
    }
// Agrega los escuchadores de eventos a los campos de entrada cuando el documento esté listo
document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input');
    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            checkInput(input);
        });
    });
});

// Tu función checkInput para aplicar los estilos a la etiqueta label cuando está en active
function checkInput(input) {
    const label = document.querySelector(`label[for="${input.id}"]`);
    if (input.value.trim() !== '') {
        label.classList.add('active');
    } else {
        label.classList.remove('active');
    }
}

  </script>
</body>
</html>
