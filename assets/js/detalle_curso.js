$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_detalle = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_detalle': id_detalle}

    console.log(id.id_detalle)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'detalle.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_detalle").val(datos.id_detalle);
            $("#id_curso").val(datos.id_curso);
            $("#id_usuario").val(datos.id_usuario);
            $("#estado").val(datos.estado)
            
            
		}
    });
    
});    