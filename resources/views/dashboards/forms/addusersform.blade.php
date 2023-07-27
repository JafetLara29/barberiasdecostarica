@extends('layouts.adminhome')

@section('content')
    <div class="py-5 bg-dark">
        <div class="card shadow m-2 mt-3 bg-dark p-2">
            <div class="d-flex align-items-start">
                <h1 for="image" class="form-label mr-2">
                    Registro de Usuario de Barbería
                </h1>
                <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                    title="Ayuda"
                    data-bs-content="Llene los diferentes campos de información para el usuario de su barbería, recuerde que la contraseña se genera automáticamente, ésta se puede cambiar en el login, al usar el apartado de 'recuperar contraseña'">
                    <i class="ti-help-alt"></i>
                </small>
            </div>

            {{-- Toast para mostrar mensajes de éxito --}}
            @if (session()->has('success'))
                <div class="position-fixed bottom-0 end-0 p-3">
                    <div id="success-toast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header bg-success text-white">
                            <strong class="me-auto">Sistema</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body" style="background-color: #353c4e;">
                            <span>{{ session()->get('success') }}</span>
                        </div>
                    </div>
                </div>
                <script>
                    var successToast = new bootstrap.Toast(document.querySelector('#success-toast'));
                    successToast.show();
                </script>
            @endif


            {{-- Resto del contenido --}}
            <form id="add-user" action="{{ route('barbers.storeUser') }}" method="post">
                <div class="container">
                    @csrf
                    <div class="mb-2">
                        <input type="text" name="name" id="name" class="form-control bg-dark"
                            placeholder="Escribe el nombre del barbero">
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-10">
                            <div class="d-grid">
                                <input type="text" name="password" id="password" class="form-control bg-dark"
                                    placeholder="Genere la contraseña" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid">
                                <button type="button" onclick="generatePassword('password')"
                                    class="btn btn-secondary mb-3">
                                    <ion-icon name="key-outline"></ion-icon>Generar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="email" placeholder="Escribe el email de usuario" class="form-control bg-dark"
                                name="email" id="email">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mb-2">Registrar</button>
                    </div>
                </div>
            </form>

            <form id="edit-user" class="visually-hidden" action="{{ route('barbers.updateUser') }}" method="post">
                <div class="container">
                    @csrf
                    <div class="mb-2">
                        <input type="text" name="name" id="nameEdit" class="form-control bg-dark"
                            placeholder="Escribe el nombre del barbero">
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-10">
                            <div class="d-grid">
                                <input type="text" name="password" id="passwordEdit" class="form-control bg-dark"
                                    placeholder="Genere la contraseña" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid">
                                <button type="button" onclick="generatePassword('passwordEdit')"
                                    class="btn btn-secondary mb-3">
                                    <ion-icon name="key-outline"></ion-icon>Generar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="email" name="email" id="emailEdit" class="form-control bg-dark"
                                placeholder="Escribe el email de usuario">
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="user_id" id="user_id">
                        <button type="submit" class="btn btn-warning mb-2">Actualizar</button>
                        <button type="button" class="btn btn-danger mb-2" onclick="cancelEdit()">Cancelar</button>
                    </div>
                </div>
            </form>

            <div class="row m-0 users-card">
                <h3 class="mt-3">Usuarios registrados</h1>
                    <div class="d-flex align-items-start">
                        <label for="image" class="form-label mr-2">
                            Perfil de Usuario de Barbería
                        </label>
                        <small class="text-success" data-bs-container="body" data-bs-toggle="popover"
                            data-bs-placement="top" title="Ayuda"
                            data-bs-content="Use el icono sobre la imagen de perfil del usuario de su barbería, para cargar la informacion previamente guardada y así actualizarla ">
                            <i class="ti-help-alt"></i>
                        </small>
                    </div>
                    @foreach ($users as $user)
                        <div class="col-lg-6 col-xl-3 col-md-6">
                            <div class="card rounded-card user-card" style="background: inherit">
                                <div class="card-block">
                                    <div class="img-hover">
                                        <img class="img-fluid img-radius" style="height: 150px;width: 150px;"
                                            src="{{ asset('/storage/images/user-barber.png') }}" alt="user-image">
                                        <div class="img-overlay img-radius">
                                            <span>
                                                <button class="btn btn-outline-primary" data-popup="lightbox"
                                                    onclick="setUserIntoForm({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}')">
                                                    <ion-icon name="create-outline"></ion-icon>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">{{ $user->name }}</h4>
                                    <p class="m-b-0 text-muted">Barbero</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function() {
            // Inicializa todos los popovers en la página
            $('[data-bs-toggle="popover"]').popover();
        });

        function generatePassword(id) {
            $("#" + id).val(generateP())
        }

        function generateP() {
            var pass = '';
            var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' + 'abcdefghijklmnopqrstuvwxyz0123456789@#$';

            for (let i = 1; i <= 8; i++) {
                var char = Math.floor(Math.random() * str.length + 1);
                pass += str.charAt(char)
            }
            return pass;
        }

        function setUserIntoForm(id, name, email) {
            $('#add-user').addClass('visually-hidden');
            $('#edit-user').removeClass('visually-hidden');
            $('#nameEdit').val(name);
            $('#emailEdit').val(email);
            $('#user_id').val(id);
        }

        function cancelEdit() {
            $('#add-user').removeClass('visually-hidden');
            $('#edit-user').addClass('visually-hidden');
            $('#nameEdit').val('');
            $('#emailEdit').val('');
            $('#user_id').val(0);
        }
    </script>
@endsection
