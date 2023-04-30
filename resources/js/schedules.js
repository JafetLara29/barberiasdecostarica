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
            // processData: false,
            // contentType: false,
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
            // processData: false,
            // contentType: false,
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
                    // processData: false,
                    // contentType: false,
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
                                // Ocultamos datos para que no pasen a la siguiente fase del formulario
                                $("#services-container").addClass(
                                    "visually-hidden"
                                );
                                $("#first-modal-button").addClass(
                                    "visually-hidden"
                                );

                                $("#hours-container").html(
                                    '<div class="text-center m-1 justify-content-center text-danger">El barbero no tiene un horario disponible para este día<div>'
                                );
                            } else {
                                // Nos aseguramos que se pueda pasar al siguiente modal
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
                                        array = element.split(":"); // Para asegurar formato de 00:00 y no de 00:00:00
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
                            Toastify({
                                text: "Ha ocurrido un error al obtener el horario del barbero. Por favor comuniquelo a los desarrolladores de la aplicación",
                                duration: 5000,
                                gravity: "top",
                                position: "center",
                                className: "custom_toast",
                                style: {
                                    background:
                                        "linear-gradient(to right, red, red)",
                                },
                            }).showToast();
                        }
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
                    // processData: false,
                    // contentType: false,
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
                    url: "/citations/inbox",
                    data: {
                        // ID de fecha
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

                            $(".modal-footer").css({
                                "font-size": "15px",
                                "font-weight": "bold",
                                "text-shadow":
                                    "0 1px 1px rgba(255, 255, 255, 0.5)",
                                "background-color": "white",
                                "background-image":
                                    "linear-gradient(45deg, #ccc 25%, transparent 25%), linear-gradient(-45deg, #ccc 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #ccc 75%), linear-gradient(-45deg, transparent 75%, #ccc 75%)",
                                "background-size": "20px 20px",
                                "background-position":
                                    "0 0, 0 10px, 10px -10px, -10px 0px",
                            });

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
                              <table class="table table-striped  rounded shadow">
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
                                // Seleccionar el boton cerrar y hacer la animacion fadeout
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
                                Toastify({
                                    text: "El día seleccionado no posee citas agendadas!",
                                    duration: 5000,
                                    gravity: "top",
                                    position: "center",
                                    className: "custom_toast",
                                    style: {
                                        background:
                                            "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                        color: "black", // Color del texto en negro para mayor contraste
                                        fontWeight: "bold", // Negrita en el texto
                                        boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                                    },
                                }).showToast();
                            } else {
                                Toastify({
                                    text: "Ha ocurrido un error al obtener las citas agendadas del barbero. Por favor comuniquelo a los desarrolladores de la aplicación",
                                    duration: 5000,
                                    gravity: "top",
                                    position: "center",
                                    className: "custom_toast",
                                    style: {
                                        background:
                                            "linear-gradient(to right, #f9d9bc, #f5cda1)", // Colores de fondo en degradado
                                        color: "black", // Color del texto en negro para mayor contraste
                                        fontWeight: "bold", // Negrita en el texto
                                        boxShadow: "0 4px 8px rgba(0,0,0,0.1)", // Sombra
                                    },
                                }).showToast();
                            }
                        }
                    }.bind(this),
                });
            },
        });

        calendar.render();
    }
});
