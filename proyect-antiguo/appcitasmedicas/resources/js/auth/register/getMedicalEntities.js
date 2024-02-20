$('#entity-type').change(function(){

  let entityType = $(this).val(); // Obtener el valor seleccionado del primer form-select
  // Enviar una solicitud AJAX al servidor con el valor seleccionado

  $.ajax({
    url:'/get-medical-entities',
    method: 'GET',
    data:{entityType:entityType},
    success: function(response){
      // Actualizar dinámicamente el contenido del segundo form-select con los datos recibidos
      $('#medical-entities').empty();
      $.each(response,function(key,value){
        $('#medical-entities').append($('<option>',{
          value:key,
          text:value
        }));
      });
    },
    error: function(xhr,status,error){
      console.log(error);
    }
  });
});