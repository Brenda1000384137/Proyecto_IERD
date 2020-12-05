$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_plan = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_plan': id_plan}

    console.log(id.id_plan)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'plane.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_plan").val(datos.id_plan);
            $("#nombre_actividad").val(datos.nombre_actividad);
            $("#fecha_inicio").val(datos.fecha_inicio);
            $("#fecha_cierre").val(datos.fecha_cierre);	
            $("#id_programacion").val(datos.id_programacion);
            $("#id_dimension").val(datos.id_dimension);
		}
    });
    
});    