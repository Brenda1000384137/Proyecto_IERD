// Declarar array global que contendra la lista de categorias
var arrAcudiente = []
// showCategories()

//LLamar función de jquery para acción click del botón addElement

$("#addElement").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let id_acu = $("#id_acu").val()
	let nombrea= $("#id_acu option:selected").text()

	if(id_acu != '') {
		if(typeof existAcudiente(id_acu) === 'undefined') {			
			//agregar acudiente al array
			arrAcudiente.push({
				'id_acu': id_acu,
				'nombrea': nombrea
			})
		} else {
			alert("El Acudiente ya se Encuentra Seleccionado")
		}
		// Metodo para mostrar en Html el array de los acudientes
		showAcudiente()
	} else {
		alert("Debe Seleccionar un acudiente")
	}
});

function existAcudiente(id_acu) {
	let existAcudiente = arrAcudiente.find(function (acudiente) {
		return acudiente.id_acu== id_acu
	})
	return existAcudiente
}

function showAcudiente() {
	$("#list-acudiente").empty()

	arrAcudiente.forEach(function (acudiente) {
	$("#list-acudiente").append('<div class="form-group"><button onclick="removeElement('+acudiente.id_acu+')" class="btn btn-danger btn-sm">X</button><span>'+acudiente.nombrea+'</span></div>')
	})
}

function removeElement(id_acu) {
	let index = arrAcudiente.indexOf(existAcudiente(id_acu))
	arrAcudiente.splice(index, 1)
	showAcudiente()
	console.log(arrAcudiente)
}

//Generar el metodo de envio al backend
$("#submit").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let url = "../../coordinador/detalle_acudiente/guardar_acu.php"
	let params = {
		
		nombre: 		$("#id_usuario").val(),
		estado: 		$("#estado ").val(),
		acudiente: 		arrAcudiente
	}


	//metodo post usando ajax para enviar la información al backend
	$.post(url, params, function (r) {
		x = JSON.parse(r)
		console.log(x.success)
		alert("Registro exitosamente");
		location.href = "../../coordinador/detalle_acudiente/deta_acu.php";		
	});
	
});

$("#update").click(function (e) {
	//Deshabilitar el envio por Http
	e.preventDefault()

	let url = "../../coordinador/acudiente_curso/editar.php"
	let params = {		
		id: 			$("#id").val(),
		id_curso: 		$("#id_curso").val(),
		year: 			$("#year").val(),
		estado: 		$("#estado").val(),
		acudiente: 	arrAcudiente
	}

	//metodo post usando ajax para enviar la información al backend
	$.post(url, params, function (response) {
		//Respuesta del Request
		if(typeof response.error !== 'undefined') {
			alert(response.message)
		} else {
			alert("Actualización Satisfactoria")
			//redirección al modulo de listar peliculas
			location.href = "../../coordinador/acudiente_curso/estu.php"
		}
	}, 'json').fail(function (error) {
		alert("Actualización Fallida ("+error.responseText+")")
		console.log(error)
	});	
});
   
