// Declarar array global que contendra la lista de categorias
var arrEstudiante = []
// showCategories()

//LLamar función de jquery para acción click del botón addElement

$("#addElement").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let id_estudiante = $("#id_estudiante").val()
	let nombre= $("#id_estudiante option:selected").text()

	if(id_estudiante != '') {
		if(typeof existEstudiante(id_estudiante) === 'undefined') {			
			//agregar estudiante al array
			arrEstudiante.push({
				'id_estudiante': id_estudiante,
				'nombre': nombre
			})
		} else {
			alert("El estudiante ya se Encuentra Seleccionado")
		}
		// Metodo para mostrar en Html el array de los estudiantes
		showEstudiante()
	} else {
		alert("Debe Seleccionar un Curso")
	}
});

function existEstudiante(id_estudiante) {
	let existEstudiante = arrEstudiante.find(function (estudiante) {
		return estudiante.id_estudiante== id_estudiante
	})
	return existEstudiante
}

function showEstudiante() {
	$("#list-estudiante").empty()

	arrEstudiante.forEach(function (estudiante) {
	$("#list-estudiante").append('<div class="form-group"><button onclick="removeElement('+estudiante.id_estudiante+')" class="btn btn-danger btn-sm">X</button><span>'+estudiante.nombre+'</span></div>')
	})
}

function removeElement(id_estudiante) {
	let index = arrEstudiante.indexOf(existEstudiante(id_estudiante))
	arrEstudiante.splice(index, 1)
	showEstudiante()
	console.log(arrEstudiante)
}

//Generar el metodo de envio al backend
$("#submit").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let url = "../../coordinador/estudiante_curso/guardar_estu.php"
	let params = {
		
		n_curso: 		$("#id_curso").val(),
		estado: 		$("#estado ").val(),
		estudiante: 	arrEstudiante
	}


	//metodo post usando ajax para enviar la información al backend
	$.post(url, params, function (x) {
		
		if(x == true){
			
			alert("Registro exitosamente");
			location.href = "estu.php";	
		}else {
			alert("Oh ha ocurrido un error");
		}
		console.log(x.success)	
	});
	
});

$("#update").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let url = "../../coordinador/estudiante_curso/editar.php"
	let params = {		
		id: 			$("#id").val(),
		id_curso: 		$("#id_curso").val(),
		estado: 		$("#estado").val(),
		estudiante: 	arrEstudiante
	}

	//metodo post usando ajax para enviar la información al backend
	$.post(url, params, function (response) {
		//Respuesta del Request
		if(typeof response.error !== 'undefined') {
			alert(response.message)
		} else {
			alert("Actualización Satisfactoria")
			//redirección al modulo de listar peliculas
			location.href = "../../coordinador/estudiante_curso/estu.php"
		}
	}, 'json').fail(function (error) {
		alert("Actualización Fallida ("+error.responseText+")")
		console.log(error)
	});	
});
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
			$("#estado").val(datos.estado);
			
			datos.forEach(element =>{
				arrEstudiante.push({
				'id_estudiante': datos.id_usuario,
				'nombre': datos.nombre
			})
			});
			
            
		}
	});
	

    
});    
