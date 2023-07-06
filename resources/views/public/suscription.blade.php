<!DOCTYPE html>
<html>
<head>
  <title>Pasarela de Suscripción</title>
  <style>
    /* Estilos para el formulario */
    body {
      background: cornflowerblue; /* Fondo azul */
      font-family: Arial, sans-serif;
      color: #fff; /* Texto en color blanco */
    }
    .form-group {
    text-align: center;
    margin-bottom: 10px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
  }

  .form-group input[type="text"],
  .form-group input[type="email"] {
    text-align: center;
    width: 90%;
    padding: 14px;
  }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    .subscription-form {
      background-color: #fff;
      border-radius: 8px;
      padding: 50px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      font-size: 14px;
    }

    .form-group select {
      appearance: none;
    }

    .form-group .card-input {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .form-group .card-input > div {
      flex: 1;
    }

    .form-group .card-input .card-brand {
      width: 30px;
      height: 30px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
    }

    .form-group .card-errors {
      color: #dc3545;
      margin-top: 5px;
      font-size: 14px;
    }

    .form-group #card-element {
      border: 1px solid #ced4da;
      border-radius: 4px;
      padding: 10px;
    }

    .form-group button {
      background-color: #4266ff;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #3452cc;
    }

    /* Estilos para los mensajes de alerta */
    .alert {
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 4px;
      font-size: 14px;
    }

.alert-success {
      background-color: #d4edda;
      color: #155724;
      border-color: #c3e6cb;
    }

    .alert-danger {
      background-color: #f8d7da;
      color: #721c24;
      border-color: #f5c6cb;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 style="text-align: center">Pasarela de Suscripción</h1>
    <div id="subscription-status" class="alert" style="display: none;"></div>

    <div class="subscription-form">
      <form id="subscription-form" method="POST" action="{{ route('subscriptions.create') }}" onsubmit="return createSubscription(event)">
        @csrf

        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" placeholder="Ingrese su nombre" required>
        </div>

        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
        </div>

        <div class="form-group">
          <label for="barbers">Cantidad de barberos:</label>
          <select id="barbers" name="barbers" required>
            <option value="">Seleccionar el paquete de barberos</option>
            <option value="1">1 barbero ($5000/mes)</option>
            <option value="2">2-3 barberos ($7000/mes)</option>
            <option value="3">4-6 barberos ($10000/mes)</option>
          </select>
        </div>

        <div class="form-group">
          <label for="card-element">
            Tarjeta de crédito:
          </label>
          <div id="card-element" class="card-input"></div>
          <div id="card-errors" class="card-errors" role="alert"></div>
        </div>

        <div style="display: flex; justify-content: center;">
          <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
            Suscribirse
          </button>
        </div>
      </form>
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
  </script>
</body>
</html>
