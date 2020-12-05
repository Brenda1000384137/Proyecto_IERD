<?php

session_start();

if (!isset($_SESSION['rol'])) {
  header('location: ../../404.html');
} else {

  if ($_SESSION['rol'] != 1) {
    header('location: ../../404.html');
  }
}


	/* Connect To Database*/
	/* Connect To Database*/
	require_once ("../../bd/dbb.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../../bd/conexion.php");//Contiene funcion que conecta a la base de datos

	$query_empresa=mysqli_query($con,"select * from usuario where id_usuario = '$_SESSION[id_usuario]'");
	$row=mysqli_fetch_array($query_empresa);

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I.E.R.D. | La Fuente Tocancipá </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="../../img/logo/logo1.jpeg">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.theme.css">
    <link rel="stylesheet" href="../../css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/educate-custon-icon.css">

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../../css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../../css/botones.css">
    <!-- modernizr JS
        ============================================ -->

    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
    <?php include("../../bd/db.php") ?>

    <body>
  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
      <a href="docente.php"><img class="main-logo" src="../../img/logo/opcion.jpeg" alt="" width="130" heigth="130" /></a>
        <strong><a href="../../perfil/docente.php"><img src="../../img/logo/logo1.jpeg" width="40" height="40" /></a></strong>
      </div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <a href="../grado/grado.php" aria-expanded="false"><span class="educate-icon educate-bell icon-wrap"></span> <span class="mini-click-non">Grado</span></a>
            </li>
            <li>
              <a href="../curso/curso.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Curso</span></a>
            </li>
            <li>
              <a href="../asignatura/asignatura.php" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Asignaturas </span></a>
            </li>
            <li>
              <a href="../programacion/programacion.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Programación</span></a>
            </li>
            <li>
              <a href="../plan/plan_accion.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Plan acción</span></a>
            </li>
            <li>
              <a href="../nota/nota.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Notas</span></a>
            </li>
            <li>
              <a href="../acudiente/acudiente.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Acudiente</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div>
  <!-- End Left menu area -->
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
      </div>
    </div>
    <div class="header-advance-area">
      <div class="header-top-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header-top-wraper">
                <div class="row">
                  <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro">
                      <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="educate-icon educate-nav"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <span class="admin-name"><?php echo ucfirst($row['nombre'])?> <?php echo ucfirst($row['apellido'])?></span>
                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                          </a>
                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                            <li><a ><span class="edu-icon edu-user-rounded author-log-ic"></span>Rol Docente</a></li>
                            <li><a href="../perfil/perfildocente.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>Perfil</a></li>
                            <li><a href="../../Vistas/logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Cerrar Sesión</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>