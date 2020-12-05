let usuario = document.getElementById('Usuario');
let clave = document.getElementById('Clave');

let error = document.getElementById('mensajeError');
error.style.color = 'red';


var formCuenta = document.getElementById('frmCuenta');
formCuenta.addEventListener('submit', function(event){
  
event.preventDefault(); //

var mensajesError = [];

  if(usuario.value === null || usuario.value === ''){
	 mensajesError.push('Ingrese Usuario');

	
  }
  if(clave.value === null || clave.value === ''){

	 mensajesError.push('Ingrese clave ');

  }
  

  error.innerHTML = mensajesError.join(' ,  ');

})

