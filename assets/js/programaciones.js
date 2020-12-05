$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_programacion = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_programacion': id_programacion}

    console.log(id.id_programacion)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'prog.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_programacion").val(datos.id_programacion);
            $("#nombre").val(datos.nombre);	
            $("#id_usuario").val(datos.id_usuario);	
            $("#id_curso").val(datos.id_curso);
            $("#id_periodo").val(datos.id_periodo);
            $("#id_asignatura").val(datos.id_asignatura);
            
		}
    });
    
});    