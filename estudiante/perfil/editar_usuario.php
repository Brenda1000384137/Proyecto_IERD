<?php
session_start();

	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nombre'])) {
			$errors[] = "nombre esta vacío";
        }else if (empty($_POST['apellido'])) {
           $errors[] = "apellido esta vacío";
        } else if (empty($_POST['celular'])) {
           $errors[] = "celular esta vacío";
        } else if (empty($_POST['correo'])) {
           $errors[] = "correo esta vacío";
        } else if (empty($_POST['direccion'])) {
           $errors[] = "direccion esta vacío";
    
        }   else if (
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido']) &&
			!empty($_POST['celular']) &&
			!empty($_POST['correo']) &&
			!empty($_POST['direccion']) 
			
	
		){
		/* Connect To Database*/
		require_once ("../../bd/dbb.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../bd/conexion.php");

		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellido=mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
		$celular=mysqli_real_escape_string($con,(strip_tags($_POST["celular"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$id_usuario = $_SESSION['id_usuario'];  

		 		
		$sql="UPDATE usuario SET nombre='".$nombre."', apellido='".$apellido."', celular='".$celular."', correo='".$correo."', direccion='".$direccion."' WHERE id_usuario = '".$id_usuario."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>