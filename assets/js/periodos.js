$(document).on("click", ".btnEditar", function(){		
	//Recojo los datos de la tabla        
    fila = $(this).closest("tr");	
    // 1.recojo id de la tabla         
    id_periodo = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    id = {'id_periodo': id_periodo}
    console.log(id.id_periodo)
    // 2.Enviar id al controlador para que consulte la informacion
    $.post({
		url: 'peri.php',
        type: 'POST',
		data: id,
		success: function(data) {
            var datos = JSON.parse(data);
        
            $("#id_periodo").val(datos.id_periodo);
            $("#nombre").val(datos.nombre);
            $("#fecha_inicio").val(datos.fecha_inicio);
            $("#fecha_cierre").val(datos.fecha_cierre);	
            $("#fecha_entrega_notas").val(datos.fecha_entrega_notas);        
		}
    });
});    
