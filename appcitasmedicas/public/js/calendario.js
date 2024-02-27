document.addEventListener('DOMContentLoaded', function() {

let formulario= document.querySelector('form');

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: "es",
      headerToolbar: {
        left: 'prev,next,today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay,listWeek'
      },

      dateClick: function(info) { 
        $("#evento").modal("show");
      }


    });
    calendar.render();

    document.getElementById(btn_save).addEventListener('click', function() {

      let datos = new FormData(formulario);
      console.log(datos);
    });

    
  });