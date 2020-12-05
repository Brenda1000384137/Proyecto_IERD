$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_nota = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_nota': id_nota}

    console.log(id.id_nota)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'nota2.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_nota").val(datos.id_nota);
            $("#nota").val(datos.nota);
            $("#id_usuario").val(datos.id_usuario);       
		}
    });
    
});    