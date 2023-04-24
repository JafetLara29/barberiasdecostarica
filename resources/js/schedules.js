// Para usar los paquetes así debemos descargarlos por npm
import swal from 'sweetalert';

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    // var btnDelete = document.getElementById('btn-delete');
    let events_ = null;

    if (view != 'home') {
        $.ajax({
            type: "POST",
            url: "/barber_citation_schedule",
            data: {},
            // processData: false,
            // contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function (response) {
                if(response['ok'] == true){
                    events_ = response['events'];
                    renderCalendar(events_);
                }
            }
        });
    } else {
        $.ajax({
            type: "POST",
            url: "/barber_citation_schedule",
            data: {},
            // processData: false,
            // contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function (response) {
                if(response['ok'] == true){
                    events_ = response['events'];
                    renderCalendar(events_);
                }
            }
        });
    }

    function renderCalendar(events_ = []){
        const calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            initialView: 'dayGridMonth',
            height: 'auto',
            timeZone: 'UTC',
            locale: "es",
            headerToolbar: {
                left: 'prev',
                center: 'title',
                right: 'dayGridMonth next'
            },
            selectable: true,
            selectMirror: true,
            events: events_,
            dateClick: function (info) {
                
                $.ajax({
                    type: "POST",
                    url: "/barber_citation_hours",
                    data: {
                        'date': info.dateStr
                    },
                    // processData: false,
                    // contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function (response) {
                        let html = '';
                        if(response['ok'] == true){
                            if(response['hours'] == 'Empty'){
                                html = '';
                                $('#hours-container').html(html);
                                // Ocultamos datos para que no pasen a la siguiente fase del formulario
                                $('#services-container').addClass('visually-hidden');
                                $('#first-modal-button').addClass('visually-hidden');
                                
                                $('#hours-container').html('<div class="text-center m-1 justify-content-center text-danger">El barbero no tiene un horario disponible para este día<div>');
                            }else{
                                // Nos aseguramos que se pueda pasar al siguiente modal
                                $('#services-container').removeClass('visually-hidden');
                                $('#first-modal-button').removeClass('visually-hidden');

                                html = '';
                                $('#hours-container').html(html);
                                let array = [];
                                response['hours'].forEach(element => {
                                    if(element != "-"){
                                        array = element.split(':'); // Para asegurar formato de 00:00 y no de 00:00:00
                                        html += `<label class="card hours-card text-center justify-content-center m-1" for="hour${element}" id="${array[0]}${array[1]}" onclick="setInput('hours-card', '${array[0]}${array[1]}', 'hour${element}')">
                                                    <input class="visually-hidden" type="radio" id="hour${element}" name="hour" value="${element}">
                                                    <p class="text-light"><strong>${element}</strong></p>
                                                </label>`; 

                                    }
                                });
                                $('#hours-container').html(html);
                            }
                        }else{
                            let html = '';
                            $('#hours-container').html(html);
                            Toastify({
                                text: "Ha ocurrido un error al obtener el horario del barbero. Por favor comuniquelo a los desarrolladores de la aplicación",
                                duration: 5000,
                                gravity: "top",
                                position: "center",
                                className: "custom_toast",
                                style: {
                                    background: "linear-gradient(to right, red, red)",
                                },
                            }).showToast();
                        }
                    }
                });
                $('#mymodal').modal('show');
            },
            eventClick: function (info) {
                console.log(info);
                $.ajax({
                    type: "POST",
                    url: "/barber_citation_client_name",
                    data: {
                        'date': info.event.startStr,
                        'time': info.event.title
                    },
                    // processData: false,
                    // contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    success: function (response) {
                        if(response['ok'] == true){
                            swal("Cita", `"${response['sender']}" ha agendado una cita en esta hora`);
                        }
                    }
                });
            }
        });

        calendar.render();
    }
});