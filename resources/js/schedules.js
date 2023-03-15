// document.addEventListener('DOMContentLoaded', function () {
//     var calendarEl = document.getElementById('calendar');
//     var btnDelete = document.getElementById('btn-delete');
//     if (view != 'home') {
//         var calendar = new FullCalendar.Calendar(calendarEl, {
//             themeSystem: 'bootstrap5',
//             initialView: 'dayGridMonth',
//             height: 'auto',
//             timeZone: 'UTC',
//             locale: "es",
//             headerToolbar: {
//                 left: 'prev',
//                 center: 'title',
//                 right: 'dayGridMonth next'
//             },
//             selectable: true,
//             selectMirror: true,
//             // events: events_,
//             dateClick: function (info) {
//                 console.log(info);
//                 // Colocamos nombre de titulo y boton del modal
//                 document.getElementById('modal-title').textContent = 'Agregar evento';
//                 document.getElementById('btn-action').textContent = 'Agregar';
//                 btnDelete.classList.add('d-none');
//                 // Seteamos espacio vacio para el caso en que anteriormente se halla levantado el modal en modo editar que se muestra abajo en el eventClick
//                 document.getElementById('id').value = '';
//                 document.getElementById('title').value = '';
//                 document.getElementById('detail').value = '';
//                 document.getElementById('color').value = '';
//                 // Seteamos la fecha que se escogió
//                 document.getElementById('start').value = info.dateStr;
//                 document.getElementById('action').value = "save";

<<<<<<< Updated upstream
                $('#myModal').modal('show');//Mostramos el modal bootstrap
            },
            eventClick: function (info) {
                // console.log(info);
                // Cambiamos titulo y nombre de boton
                document.getElementById('modal-title').textContent = 'Modificar evento';
                document.getElementById('btn-action').textContent = 'Modificar';
                btnDelete.classList.remove('d-none');
                // Seteamos valores a los inputs
                document.getElementById('id').value = info.event.id;
                document.getElementById('title').value = info.event.title;
                document.getElementById('start').value = info.event.startStr;
                document.getElementById('detail').value = info.event.extendedProps.detail;
                document.getElementById('color').value = info.event.backgroundColor;
                document.getElementById('action').value = "edit";

                $('#myModal').modal('show');//Mostramos el modal bootstrap
            }
        });
=======
//                 myModal.show();
//             },
//             eventClick: function (info) {
//                 // console.log(info);
//                 // Cambiamos titulo y nombre de boton
//                 document.getElementById('modal-title').textContent = 'Modificar evento';
//                 document.getElementById('btn-action').textContent = 'Modificar';
//                 btnDelete.classList.remove('d-none');
//                 // Seteamos valores a los inputs
//                 document.getElementById('id').value = info.event.id;
//                 document.getElementById('title').value = info.event.title;
//                 document.getElementById('start').value = info.event.startStr;
//                 document.getElementById('detail').value = info.event.extendedProps.detail;
//                 document.getElementById('color').value = info.event.backgroundColor;
//                 document.getElementById('action').value = "edit";

//                 myModal.show();
//             }
//         });
>>>>>>> Stashed changes

//         calendar.render();

//         // form_.addEventListener('submit', function (e) {
//         //     e.preventDefault();//Para evitar que se recargue la pagina al presionar boton submit
//         //     const title = document.getElementById('title').value;
//         //     const start = document.getElementById('start').value;
//         //     const color = document.getElementById('color').value;
//         //     if (title == '' || start == '' || color == '') {
//         //         swal(
//         //             'Aviso',
//         //             'Todos los campos son requeridos',
//         //             'warning'
//         //         )
//         //     } else {
//         //         form_.submit();
//         //     }
//         // })

<<<<<<< Updated upstream
        btnDelete.addEventListener('click', function (e) {
            $('#myModal').modal('hide');//Ocultamos el modal bootstrap
            swal({
                title: 'Advertencia',
                text: '¿Estas seguro que deseas eliminar este evento?',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Eliminar',
                confirmButtonColor: '#d33'
            }).then(result => {
                if (result.value) {//Boton de confirm (Eliminar)
                    document.getElementById('action').value = "delete";
                    form_.submit();
                }
            });
        })
    } else {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap5',
            initialView: 'dayGridMonth',
            height: 'auto',
            timeZone: 'UTC',
            locale: "es",
            headerToolbar: {
                left: '',
                center: 'title',
                right: ''
            },
            // events: events_
        });
=======
//         btnDelete.addEventListener('click', function (e) {
//             myModal.hide();
//             swal({
//                 title: 'Advertencia',
//                 text: '¿Estas seguro que deseas eliminar este evento?',
//                 showCancelButton: true,
//                 cancelButtonText: 'Cancelar',
//                 cancelButtonColor: '#3085d6',
//                 confirmButtonText: 'Eliminar',
//                 confirmButtonColor: '#d33'
//             }).then(result => {
//                 if (result.value) {//Boton de confirm (Eliminar)
//                     document.getElementById('action').value = "delete";
//                     form_.submit();
//                 }
//             });
//         })
//     } else {
//         var calendar = new FullCalendar.Calendar(calendarEl, {
//             themeSystem: 'bootstrap5',
//             initialView: 'dayGridMonth',
//             height: 'auto',
//             timeZone: 'UTC',
//             locale: "es",
//             headerToolbar: {
//                 left: '',
//                 center: 'title',
//                 right: ''
//             },
//             // events: events_
//         });
>>>>>>> Stashed changes

//         calendar.render();
//     }
// });
