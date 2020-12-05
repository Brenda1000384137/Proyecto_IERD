$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_usuario = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_usuario': id_usuario}

    console.log(id.id_usuario)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'usua.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_usuario").val(datos.id_usuario);
            $("#nombre").val(datos.nombre);
            $("#apellido").val(datos.apellido);
            $("#clave").val(datos.clave);	
            $("#celular").val(datos.celular);
            $("#id_tipo").val(datos.id_tipo);
            $("#n_documento").val(datos.n_documento);
            $("#id_rol").val(datos.id_rol);
            $("#correo").val(datos.correo);
            $("#direccion").val(datos.direccion);
		}
    });
    
});   


