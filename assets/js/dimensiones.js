$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_dimension = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_dimension': id_dimension}

    console.log(id.id_dimension)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'dime.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_dimension").val(datos.id_dimension);
            $("#nombre").val(datos.nombre);
            
            
            
		}
    });
    
});    