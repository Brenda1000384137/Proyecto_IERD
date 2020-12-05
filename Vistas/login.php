<?php


// include the configs / constants for the database connection
require_once("../bd/db.php");

// load the login class
require_once("../bd/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
   header("location: editar.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>I.E.R.D La Fuente | Iniciar Sesión  </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/sinfo.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../css/css_li/util.css">
	<link rel="stylesheet" type="text/css" href="../css/css_li/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../img/img_5.jpeg');">
			<div class="wrap-login100">
				<form action="#" method="POST">
					<span class="login100-form-logo">
						<i><img type="image/jpg" src="../img/sinfo.png" width="100px" height="100px"></i>
					</span> <br>
					<center>
						<h2>Iniciar sesión</h2>
					</center>
					<div class="wrap-input100 validate-input">
						<input class="input100" class="Form" type="text" name="n_documento" [A-Za-z]{5,8} autocomplete="off" placeholder="No. Documento" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input id="txtPassword" class="input100" class="Form" type="password" name="clave" [a-z]{5,8} autocomplete="off" placeholder="Clave" required>
						<span class="focus-input100" data-placeholder="&#xf191;"> </span>
					</div>
					<button id="show_password" class="btn btn-warning btn-sm" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"> </span></button>
				
					<br><br>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Acepto los términos y condiciones de este sitio web.
						</label>
						<?php

include_once '../bd/database.php';


if (isset($_GET['cerrar_sesion'])) {
	session_unset();

	session_destroy();
}

if (isset($_SESSION['rol'])) {

	switch ($_SESSION['rol']) {
		case 1:
			header('location: ../docente/perfil/docente.php');
			break;

		case 2:
			header('location: ../estudiante/perfil/estudiante.php');
			break;


		case 3:
			header('location: ../coordinador/perfil/coordinador.php');
			break;

		default:
	}
}
if (isset($_POST['n_documento']) && isset($_POST['clave'])) {

	$n_documento = $_POST['n_documento'];
	$clave = md5($_POST['clave']);

	$db = new Database();
	$query = $db->connect()->prepare('SELECT*FROM usuario WHERE n_documento = :n_documento AND clave = :clave');
	$query->execute(['n_documento' => $n_documento, 'clave' => $clave]);

	$row = $query->fetch(PDO::FETCH_NUM);
	if ($row == true) {

		$id_usuario = $row[0];
		$nombre = $row[1];
		$apellido = $row[2];
		$celular = $row[4];
		$id_tipo = $row[5];
		$n_documento = $row[6];
		$rol = $row[7];
		$correo = $row[8];
		$direccion = $row[9];
		$_SESSION['id_usuario'] = $id_usuario;
		$_SESSION['nombre'] = $nombre;
		$_SESSION['apellido'] = $apellido;
		$_SESSION['celular'] = $celular;
		$_SESSION['id_tipo'] = $id_tipo;
		$_SESSION['n_documento'] = $n_documento;
		$_SESSION['rol'] = $rol;
		$_SESSION['correo'] = $correo;
		$_SESSION['direccion'] = $direccion;
		

		switch ($_SESSION['rol']) {
			case 1:
				header('location: ../docente/perfil/docente.php');
				break;

			case 2:
				header('location: ../estudiante/perfil/estudiante.php');
				break;

			case 3:
				header('location: ../coordinador/perfil/coordinador.php');
				break;

			default:
		}
	} else {

		echo '<link href="../css/ESTILOPHP.css" type="text/css" rel="stylesheet">';
		$titulo = "<p class='alert alert-danger alert-mg-b' role='alert'>El usuario o contraseña son incorrectos</p>";
		echo "<code class='titulo'>$titulo</code>";
	}
}

?>
<br>
<input class="login100-form-btn btn-block" class="submit" name="submit" type="submit" value="Iniciar Sesión" />					</div>

					<div class="container-login100-form-btn">
					
						<a class="txt1" href="recuperacion.php">
							¿Olvidaste tu contraseña?
						</a>
					</div>

					<div class="text-center p-t-90">
						
					</div>
		
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function mostrarPassword() {
			var cambio = document.getElementById("txtPassword");
			if (cambio.type == "password") {
				cambio.type = "text";
				$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
			} else {
				cambio.type = "password";
				$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
			}
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="../assets/js/login.js"></script>
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/animsition/js/animsition.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../vendor/countdowntime/countdowntime.js"></script>
	<script src="../js/js_li/main.js"></script>
	<script src="../js/js_li/validalogin.js"></script>
</body>

	</html> <?php }