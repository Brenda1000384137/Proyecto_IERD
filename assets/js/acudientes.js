$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_acudiente = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_acudiente': id_acudiente}

    console.log(id.id_acudiente)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'acu.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_acudiente").val(datos.id_acudiente);
            $("#nombrea").val(datos.nombrea);
            $("#apellido").val(datos.apellido);
            $("#telefono").val(datos.telefono);	
            $("#correo").val(datos.correo);
            $("#n_documento").val(datos.n_documento);
		}
    });
    
});    