<?php
require '../bd/db.php';

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>I.E.R.D. | La Fuente | Recuperación Contraseña</title>
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
  <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div class="container-login100" style="background-image: url('../img/img_5.jpeg');" align="center">
    <div class="wrap-login100">
      <div class="error-page-int">
        <div class="text-center ps-recovered">
						<i><img type="image/jpg" src="../img/sinfo.png" width="100px" height="100px"></i>
          <h2>Recuperación de contraseña</h2> <br>
        </div>
        <div class="content-error">
          <div class="hpanel">
            <form action="recuperacion_consulta.php" method="POST" id="loginForm"> 

              <div class="wrap-input100 validate-input" >
              <p align="left">Ingrese su correo electrónico, por favor el mismo que tiene registrado.</p>
                <input class="input100"  class="Form" type="email" name="correo" [A-Za-z]{5,8} autocomplete="off" placeholder="Correo electrónico" required>
              </div>
              
              <div class="container-login100-form-btn">
                <input class="login100-form-btn btn-block" class="submit" name="submit" type="submit" value="Recuperar Contraseña" />  
              </div>
              <a class="btn btn-link" href="login.php"name="submit">Volver</a>
              <?php
                if(isset($resp)):
                  echo $resp;
                endif;
              ?> 
            </form>
          </div>
        </div>
        <br>
        <div class="text-center login-footer">
          <p>Copyright © 2020. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
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

</html>