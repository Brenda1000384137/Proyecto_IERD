
$(document).on("click", ".btnBuscar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_curso = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
   
    idc = {'id_curso': id_curso}

    console.log(idc.id_curso)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
      url: 'consulta_modal.php',
          type: 'POST',
      data: idc,
      
      success: function(data) {
         var datos = JSON.parse(data);
        
          array.forEach(element => {
               
                $("#id_curso").val(datos.id_curso);
                $("#n_curso").val(datos.n_curso);
                $("#id_usuario").val(datos.id_usuario);
                $("#nombre").val(datos.nombre);
                $("#apellido").val(datos.apellido);
                
          });  
        console.log($data());
        
      }
    });
    
    
});    