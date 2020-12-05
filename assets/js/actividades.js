$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_actividad = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_actividad': id_actividad}

    console.log(id.id_actividad)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'acti.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
            $("#id_actividad").val(datos.id_actividad);
            $("#nombre").val(datos.nombre);
            $("#id_usuario").val(datos.id_usuario);
            $("#id_dimension").val(datos.id_dimension);       
		}
    });    
});    