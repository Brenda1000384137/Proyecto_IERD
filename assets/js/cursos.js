$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_curso = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    id = {'id_curso': id_curso}

    console.log(id.id_curso)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'curs.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
            $("#id_curso").val(datos.id_curso);
            $("#n_curso").val(datos.n_curso);    
		}
    });
    
});    