<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/suscriptionstyle.css', 'resources/js/app.js', 'resources/sass/app.scss']) {{--  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div id="subscription-status" class="alert alert-success" style="display: none;"></div>
        <form class="form-car text-shadow-3" id="subscription-form" method="POST"
            action="{{ route('subscriptions.create') }}" onsubmit="return createSubscription(event)">
            <div class="form-car-inner">
                @csrf

                <h3 class="mb-4 text-center text-light">@lang('messages.Pasarela_de_Suscripción')</h3>

                <div class="form-group">
                    <input type="text" id="name" name="name" required class="form-control">
                    <label for="name">@lang('messages.Name')</label>
                </div>

                <div class="form-group">
                    <input type="email" id="email" name="email" required class="form-control">
                    <label for="email">@lang('messages.Correo_electrónico') </label>
                </div>

                <div class="form-group">
                    <label for="barbers" id="barbers-label">@lang('messages.Cantidad_de_barberos')</label>
                    <select id="barbers" name="barbers" required class="form-control">
                        <option value="">@lang('messages.Seleccione')</option>
                        <option value="1">@lang('messages.1 barbero')</option>
                        <option value="2">@lang('messages.2-3 barberos')</option>
                        <option value="3">@lang('messages.4-6 barberos')</option>
                    </select>
                </div>

                <div class="form-group" id="card-element-container">
                    <label for="barbers" id="email">@lang('messages.Tarjeta_de_crédito')</label>
                    <div id="card-element" class="card-input"></div>
                    <div id="card-errors" class="card-errors" role="alert"></div>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-outline-danger btn-lg">@lang('messages.Suscribirse')</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('pk_test_...'); // Reemplaza 'pk_test_...' con tu clave pública de Stripe

        // Crea el elemento de tarjeta de crédito de Stripe
        var elements = stripe.elements();
        var cardElement = elements.create('card', {
            style: {
                base: {
                    color: 'lightgray',
                    fontFamily: 'Arial, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: 'lightgray'
                    }
                }
            }
        });
        cardElement.mount('#card-element');

        // Manejo de errores en tiempo real del elemento de tarjeta de crédito
        cardElement.addEventListener('change', function(event) {
            var cardErrors = document.getElementById('card-errors');
            if (event.error) {
                cardErrors.textContent = event.error.message;
            } else {
                cardErrors.textContent = '';
            }
        });

        // Función para enviar el formulario al backend y crear la suscripción
        function createSubscription(event) {
            event.preventDefault();
            var form = document.getElementById('subscription-form');
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var tokenInput = document.createElement('input');
                    tokenInput.type = 'hidden';
                    tokenInput.name = 'stripeToken';
                    tokenInput.value = result.token.id;
                    form.appendChild(tokenInput);
                    form.submit();
                }
            });
            return false;
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
