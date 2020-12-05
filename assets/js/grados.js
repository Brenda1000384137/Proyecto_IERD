$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_grado = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_grado': id_grado}

    console.log(id.id_grado)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'grad.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_grado").val(datos.id_grado);
            $("#nombre").val(datos.nombre);
                
		}
    });
    
});   