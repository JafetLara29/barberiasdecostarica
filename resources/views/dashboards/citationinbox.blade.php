@extends('layouts.adminhome')

@section('content')
    <div class="">
        <div class="card shadow bg-dark ml-2 mt-4">


            <div class="d-flex align-items-start">
                <h3 for="image" class="form-label ml-3 text-gray text-center">
                    Citas pendientes
                </h3>
                <small class="text-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                    title="Ayuda"
                    data-bs-content="Seleccione alguna de las citas disponibles en la lista , para aceptarlas o rechazarlas ,según lo requiera.">
                    <i class="ti-help-alt"></i>
                </small>
            </div>
            <div class="list-group overflow-auto p-2" id="citation">

            </div>

            @if (!isset($barber) || $barber->citations->isEmpty())
                <div class="alert alert-warning">
                    no hay citas pendientes

                </div>
            @endif

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="popover"]').popover();
        });
        $(document).ready(function() {
            receiveCitations();
        });

        function receiveCitations() {
            $.ajax({
                url: '/citations/get',
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response.citation);
                    if (response.success) {
                        let html = '';
                        // Iterate through the messages
                        $.each(response.citation, function(index, citation) {
                            // Append the message to the messages list
                            html += `
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true" style="background: linear-gradient(90deg, #E9F7F3 0%, #00D29C 100%); ">
                                    <div class="d-flex w-100 justify-content-between flex-wrap">
                                        <h5 class="mb-1">${citation.sender}</h5>
                                    </div>
                                    <p class="mb-1"></p>
                                    <small>Fecha Agendada: ${citation.date}</small>
                                    <br>
                                    <small>Hora Agendada: ${citation.time}</small>
                                    <br>
                                    <div class="d-flex ">
                                        <button onClick="acceptCitation(${citation.id})" type="button" id="accept" class="btn btn-outline-success btn-sm">Aceptar</button>
                                        <button onClick="rejectCitation(${citation.id})" type="button" id="reject" class="btn btn-outline-danger btn-sm">Rechazar</button>
                                    </div>

                                </a>`;
                        });
                        $('#citation').html(html);
                    } else {
                        // Display an error message
                        alert('An error occurred');
                    }
                }
            });
        }

        function acceptCitation(id) {
            $.ajax({
                url: '/citations/accept/' + id,
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Mark the message as read in the list

                        Toastify({
                            text: "Cita aceptada exitosamente!!!!!",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, green, green)",
                            },

                        }).showToast();

                        receiveCitations();
                    } else {
                        // Display an error message
                        alert('An error occurred');
                    }
                }
            });

        }

        function rejectCitation(id) {
            $.ajax({
                url: '/citations/reject/' + id,
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Mark the message as read in the list

                        Toastify({
                            text: "Cita rechazada exitosamente !!!",
                            duration: 5000,
                            gravity: "top",
                            position: "center",
                            style: {
                                background: "linear-gradient(to right, green, green)",
                            },

                        }).showToast();

                        receiveCitations();
                    } else {
                        // Display an error message
                        alert('An error occurred');
                    }
                }
            });

        }
    </script>
@endsection
