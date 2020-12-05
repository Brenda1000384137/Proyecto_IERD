$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_asignatura = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_asignatura': id_asignatura}

    console.log(id.id_asignatura)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'asig.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_asignatura").val(datos.id_asignatura);
            $("#nombre").val(datos.nombre);
            $("#id_grado").val(datos.id_grado);     
		}
    });
    
});    