$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_rol = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_rol': id_rol}

    console.log(id.id_rol)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'role.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_rol").val(datos.id_rol);
            $("#nombre").val(datos.nombre);
                  
		}
    });
    
});    