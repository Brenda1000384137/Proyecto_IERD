<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header('location: ../../404.html');
} else {

    if ($_SESSION['rol'] != 3) {
        header('location: ../../404.html');
    }
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I.E.R.D. | La Fuente | Listado </title>
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
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/editor/select2.css">
    <link rel="stylesheet" href="../../css/editor/datetimepicker.css">
    <link rel="stylesheet" href="../../css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="../../css/editor/x-editor-style.css">
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
    <!-- Estilo de los botones -->
    <link rel="stylesheet" href="../../css/botones.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="../../css/modals.css">
    <?php include("../../bd/db.php") ?>
</head>

<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
            <a href="../../coordinador.php"><img class="main-logo" src="../../img/logo/opcion.jpeg" alt="" width="150" heigth="150" /></a>
                <strong><a href="../../coordinador.php"><img src="../../img/logo/logo1.jpeg" width="50" height="60" /></a></strong>

            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="../usuario/usuario.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Usuarios</span></a>
                        </li>
                        <li>
                            <a href="../grado/grado.php" aria-expanded="false"><span class="educate-icon educate-bell icon-wrap"></span> <span class="mini-click-non">Grado</span></a>
                        </li>
                        <li>
                            <a href="../curso/curso.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Curso</span></a>
                        </li>
                        <li>
                            <a href="../periodo/periodo.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg"></span> <span class="mini-click-non">Período</span></a>

                        </li>
                        <li>
                            <a href="../dimension/dimension.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Dimensión</span></a>

                        </li>
                        <li>
                            <a href="../acudiente/acudiente.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Acudiente</span></a>

                        </li>
                        <li>
                            <a href="../nota/nota.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Notas</span></a>
                        </li>
                        <li>
                            <a href="../asignatura/asignatura.php" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Asignaturas </span></a>
                        </li>
                        <li>
                            <a href="../plan/plan_accion.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Plan acción</span></a>

                        </li>
                        <li>
                            <a href="../programacion/programacion.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Programación</span></a>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../../img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
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
                                                    <a href="../../Vistas/miperfil.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="../../img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name"> <?php echo $_SESSION['nombre']?> <?php echo $_SESSION['apellido']?></span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a ><span class="edu-icon edu-user-rounded author-log-ic"></span>Rol Coordinador</a></li>
                                                        <li><a href="../../Vistas/miperfil.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>Perfil</a></li>
                                                        <li><a href="../../logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Cerar Sesión</a></li>
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
            </div> <br><br><br>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="../../coordinador.php.php">Inicio</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><a href="../curso/curso.php">Curso</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Listado</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Listado <span class="table-project-n">del</span> Curso</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="container p-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    </div>
                                    <div class="card">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>N° </th>
                                                    <th>Curso </th>
                                                    <th># Usuario</th>
                                                    <th>Estudiantes</th>    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $id_curso=$_GET['Curso'];
                                                $query = "SELECT u.nombre,u.apellido, d.id_usuario, d.id_curso, c.n_curso FROM detalle_curso d
                                                INNER JOIN usuario u ON u.id_usuario=d.id_usuario
                                                INNER JOIN curso c ON c.id_curso=d.id_curso where c.id_curso='{$id_curso}'";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_curso'] ?></td>
                                                        <td> <?php echo $row['n_curso'] ?></td>
                                                        <td> <?php echo $row['id_usuario'] ?></td>
                                                        <td> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?></td>
                                                        
                                    </tr>
                                <?php } ?>

                                </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Static Table End -->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../../js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../../js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../../js/metisMenu/metisMenu.min.js"></script>
    <script src="../../js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="../../js/data-table/bootstrap-table.js"></script>
    <script src="../../js/data-table/tableExport.js"></script>
    <script src="../../js/data-table/data-table-active.js"></script>
    <script src="../../js/data-table/bootstrap-table-editable.js"></script>
    <script src="../../js/data-table/bootstrap-editable.js"></script>
    <script src="../../js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../../js/data-table/colResizable-1.5.source.js"></script>
    <script src="../../js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="../../js/editable/jquery.mockjax.js"></script>
    <script src="../../js/editable/mock-active.js"></script>
    <script src="../../js/editable/select2.js"></script>
    <script src="../../js/editable/moment.min.js"></script>
    <script src="../../js/editable/bootstrap-datetimepicker.js"></script>
    <script src="../../js/editable/bootstrap-editable.js"></script>
    <script src="../../js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="../../js/chart/jquery.peity.min.js"></script>
    <script src="../../js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../../js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../../js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../../js/main.js"></script>

    <script src="../../assets/js/cursos.js"></script>
   

</body>

</html>