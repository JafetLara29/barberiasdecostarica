// Para usar los paquetes así debemos descargarlos por npm
import swal from "sweetalert";
import randomColor from "randomcolor";



document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    // var btnDelete = document.getElementById('btn-delete');
    let events_ = null;

    if (view != "home") {
        //Administrativa
        $.ajax({
            type: "POST",
            url: "/barber_citation_schedule",
            data: {},
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            success: function (response) {
                if (response["ok"] == true) {
                    events_ = response["events"];
                    renderCalendarAdmin(events_);
                }
            },
        });
    } else {
        // Parte Publica
        $.ajax({
            type: "POST",
            url: "/barber_citation_schedule",
            data: {},
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            success: function (response) {
                if (response["ok"] == true) {
                    events_ = response["events"];
                    renderCalendar(events_);
                }
            },
        });
    }

    function renderCalendar(events_ = []) {
        const calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: "bootstrap5",
            initialView: "dayGridMonth",
            height: "auto",
            timeZone: "UTC",
            locale: "es",
            headerToolbar: {
                left: "prev",
                center: "title",
                right: "dayGridMonth next",
            },
            selectable: true,
            selectMirror: true,
            events: events_,
            dateClick: function (info) {
                $.ajax({
                    type: "POST",
                    url: "/barber_citation_hours",
                    data: {
                        date: info.dateStr,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    dataType: "json",
                    success: function (response) {
                        let html = "";
                        if (response["ok"] == true) {
                            if (response["hours"] == "Empty") {
                                html = "";
                                $("#hours-container").html(html);
                                $("#services-container").addClass(
                                    "visually-hidden"
                                );
                                $("#first-modal-button").addClass(
                                    "visually-hidden"
                                );
                                html =
                                    '<div class="text-center m-1 justify-content-center text-danger">El barbero no tiene un horario disponible para este día<div>';
                                $("#hours-container").html(html);
                            } else {
                                $("#services-container").removeClass(
                                    "visually-hidden"
                                );
                                $("#first-modal-button").removeClass(
                                    "visually-hidden"
                                );
                                html = "";
                                $("#hours-container").html(html);
                                let array = [];
                                response["hours"].forEach((element) => {
                                    if (element != "-") {
                                        array = element.split(":");
                                        html += `<label class="card hours-card text-center justify-content-center m-1" for="hour${element}" id="${array[0]}${array[1]}" onclick="setInput('hours-card', '${array[0]}${array[1]}', 'hour${element}')">
                                                    <input class="visually-hidden" type="radio" id="hour${element}" name="hour" value="${element}">
                                                    <p class="text-light"><strong>${element}</strong></p>
                                                </label>`;
                                    }
                                });
                                $("#hours-container").html(html);
                            }
                        } else {
                            let html = "";
                            $("#hours-container").html(html);
                            showToast(
                                "Ha ocurrido un error al obtener el horario del barbero. Por favor comuníquelo a los desarrolladores de la aplicación",
                                "error"
                            );
                        }
                    },
                    error: function (xhr) {
                        showToast(
                            "Ha ocurrido un error al obtener el horario del barbero. Por favor comuníquelo a los desarrolladores de la aplicación",
                            "error"
                        );
                    },
                });
                $("#mymodal").modal("show");
            },
            eventClick: function (info) {
                console.log(info);
                $.ajax({
                    type: "POST",
                    url: "/barber_citation_client_name",
                    data: {
                        date: info.event.startStr,
                        time: info.event.title,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response["ok"] == true) {
                            swal(
                                "Cita",
                                `"${response["sender"]}" ha agendado una cita en esta hora`
                            );
                        }
                    },
                    error: function (xhr) {
                        showToast(
                            "Ha ocurrido un error al obtener el nombre del cliente de la cita. Por favor comuníquelo a los desarrolladores de la aplicación",
                            "error"
                        );
                    },
                });
            },
        });

        calendar.render();
    }

    //Funcion para los colores
    function randomColor() {
        var hue = Math.floor(Math.random() * 25 + 5); // Genera un matiz aleatorio entre 5 y 30 grados
        var saturation = Math.floor(Math.random() * 50 + 50); // Genera una saturación aleatoria entre 50% y 100%
        var luminosity = Math.floor(Math.random() * 15 + 75); // Genera una luminosidad aleatoria entre 75% y 90%
        return `hsl(${hue}, ${saturation}%, ${luminosity}%)`; // Devuelve un color aleatorio en formato hsl
    }

    // Para Administrativo

    function renderCalendarAdmin(events_ = []) {
        const calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: "bootstrap5",
            initialView: "dayGridMonth",
            height: "auto",
            timeZone: "UTC",
            locale: "es",
            headerToolbar: {
                left: "prev",
                center: "title",
                right: "dayGridMonth next",
            },
            selectable: true,
            selectMirror: true,
            events: events_,
            dateClick: function (info) {
                $.ajax({
                    type: "POST",
                    url: "/barber_citations_for_schedule",
                    data: {
                        date: info.dateStr,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.success && response.events.length !== 0) {
                            // Agregar estilos personalizados para el modal
                            $(".table th").css({
                                "background-color": "#fff",
                                "font-weight": "bold",
                                "text-align": "center",
                            });

                            $(".table td").css({
                                "background-color": "#fff",
                                "font-weight": "normal",
                                "text-align": "center",
                            });

                            var table = `
                                <div class="table-responsive" style="">
                                  <table class="table table-striped rounded shadow">
                                    <thead>
                                      <tr>
                                        <th>Servicio</th>
                                        <th>Hora</th>
                                        <th>Fecha</th>
                                        <th>Agendado por</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                              `;
                            for (var i = 0; i < response.events.length; i++) {
                                var rowColor = randomColor(); // Genera un color aleatorio para cada fila

                                table += `
                                  <tr style="background-color:${rowColor}; border-radius: 10px; border: 10px solid white;"  class="rounded">
                                    <td>${response.events[i].service}</td>
                                    <td>${response.events[i].time}</td>
                                    <td>${response.events[i].date}</td>
                                    <td style="color:black">${response.events[i].sender}</td>
                                  </tr>
                                `;
                            }
                            table += `
                                    </tbody>
                                  </table>
                                </div>
                              `;
                            $("#modal-body").html(table);
                            $("#mymodal").modal("show"); // Abre el modal
                            $(document).ready(function () {
                                // Seleccionar el botón cerrar y hacer la animación fadeout
                                $(".btn-outline-success").click(function () {
                                    $("#mymodal").fadeOut("slow", function () {
                                        $(this).modal("toggle");
                                    });
                                });
                            });
                        } else {
                            let html = "";
                            $("#hours-container").html(html);

                            if (response.events.length === 0) {
                                showToast(
                                    "El día seleccionado no posee citas agendadas!",
                                    "success"
                                );
                            } else {
                                showToast(
                                    "Ha ocurrido un error al obtener las citas agendadas del barbero. Por favor comuníquelo a los desarrolladores de la aplicación",
                                    "error"
                                );
                            }
                        }
                    },
                    error: function (xhr) {
                        showToast(
                            "Ha ocurrido un error al obtener las citas agendadas del barbero. Por favor comuníquelo a los desarrolladores de la aplicación",
                            "error"
                        );
                    },
                });
            },
        });

        calendar.render();
    }
    // Toast bootstrap miedo seteado
    function showToast(message, type) {
        var toast = `
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header bg-danger text-white">
                    <strong class="mr-auto">Error</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body bg-light">
                    ${message}
                </div>
            </div>
        `;

        $('.toast-container').append(toast);

        // Personalizar el estilo del toast
        $('.toast:last').addClass('position-fixed bottom-0 end-0 m-3'); // Posicionamiento
        $('.toast:last .toast-header').addClass('bg-danger text-white'); // Estilo del encabezado
        $('.toast:last .toast-body').addClass('bg-light'); // Estilo del cuerpo

        $('.toast').toast('show');
    }
    // Comportamiento del toast
    $(document).ready( async function() {
        $(".toast").toast("show"); // Mostrar el toast al cargar la página

        $(".toast .close").on("click", function() {
            $(this).closest(".toast").toast("hide");
        });
    });

});
