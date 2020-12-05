<?php
include('../sidebar.php');
?>
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../perfil/coordinador.php">Inicio</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Clases</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Listado <span class="table-project-n">de</span> clases</h1>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="container p-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php if (isset($_SESSION['message'])) { ?>
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <?= $_SESSION['message'] ?>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <?php session_unset();
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- prueba modal -->
                                    <button  class="boton_personalizado" data-toggle="modal" data-target="#modalForm">
                                        <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Clase
                                        </button>
                                    <div class="container p-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php if (isset($_SESSION['message'])) { ?>
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <?= $_SESSION['message'] ?>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                <?php session_unset();
                                                } ?>
                                                <div class="modal fade" id="modalForm" role="dialog">
                                                    <div class="modal-dialog ">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header bg-primary">
                                                                <h4 align="left" class="modal-title" id="myModalLabel"> Agregar clase</h4>
                                                            </div>
                                                            <!-- Modal Body -->
                                                            <div class="modal-body ">
                                                                <form action="Guardar_programacion.php" method="POST" id="validacion" data-parsley-required>
                                                                    <div class="devit-card-custom">
                                                                        <div class="form row">
                                                                            <div class="form-group col-md-6">
                                                                                <label>Nombre</label>
                                                                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" data-parsley-length="[3, 20]">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label>Docente a Cargo</label>
                                                                                <select class="form-control"  name="id_usuario" id="cbx_usuario">
                                                                                    <?php    $query = "SELECT * from usuario where estado='Activo' and id_usuario=$_SESSION[id_usuario]";
                                                                                                            $result_usuario = mysqli_query($conn, $query);?>
                                                                                                            
                                                                                    <option value="0">Selecione</option> 
                                                                                        <?php while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                                            <option value="<?php echo $row['id_usuario'] ?>"> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?> </option> 
                                                                                            <?php } ?>
                                                                                </select> 
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label>Asignatura</label>
                                                                                <select class="form-control"  name="id_asignatura" id="cbx_asignatura">
                                                                                    <?php    $query = "SELECT * from asignatura";
                                                                                                            $result_asignatura = mysqli_query($conn, $query);?>
                                                                                                            
                                                                                    <option value="0">Selecione</option> <?php
                                                                                            while ($row = mysqli_fetch_array($result_asignatura)) { ?>
                                                                                            <option value="<?php echo $row['id_asignatura'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label>Curso</label>
                                                                                <select class="form-control" id="combox_curso" name="id_curso">
                                                                                    <?php    $query = "SELECT * from curso";
                                                                                                            $result_curso = mysqli_query($conn, $query);?>
                                                                                                            
                                                                                    <option value="0">Selecione</option> <?php
                                                                                            while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                                            <option value="<?php echo $row['id_curso'] ?>"> <?php echo $row['n_curso'] ?> </option> <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label>Periodo</label>
                                                                                <select class="form-control" name="id_periodo">
                                                                                    <?php    $query = "SELECT * from periodo";
                                                                                                            $result_periodo = mysqli_query($conn, $query);?>
                                                                                                            
                                                                                    <option value="">Selecione</option> <?php
                                                                                            while ($row = mysqli_fetch_array($result_periodo)) { ?>
                                                                                            <option value="<?php echo $row['id_periodo'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal Footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                        <input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
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
                                                            <th>No. </th>
                                                            <th>Nombre</th>
                                                            <th>Docente a cargo</th>
                                                            <th>Curso</th>
                                                            <th>Período</th>
                                                            <th>Asignatura</th>
                                                            <th>Estado</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

                                                            <?php

                                                             
                                                             $query = "SELECT prog.id_programacion, prog.nombre, u.nombre as nombred, u.apellido as apellidou, asig.nombre as nombreasig, 
                                                             cur.n_curso, p.nombre as nombre_periodo, prog.estado FROM programacion prog INNER JOIN usuario u ON u.id_usuario = prog.id_usuario
                                                              INNER JOIN curso cur ON cur.id_curso = prog.id_curso INNER JOIN periodo p ON p.id_periodo = prog.id_periodo 
                                                              INNER JOIN asignatura asig ON asig.id_asignatura = prog.id_asignatura WHERE u.id_usuario = $_SESSION[id_usuario]";
                                                            $result_rols = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_programacion'] ?></td>
                                                            <td> <?php echo $row['nombre'] ?></td>
                                                            <td> <?php echo $row['nombred'] ?> <?php echo $row['apellidou'] ?></td>
                                                            <td> <?php echo $row['n_curso'] ?></td>
                                                            <td> <?php echo $row['nombre_periodo'] ?></td>
                                                            <td> <?php echo $row['nombreasig'] ?></td>
                                                            <td> <a href="../../boton/boton_programacion.php?id_programacion=<?php echo $row['id_programacion'] ?>" class="btn btn-primary">
                                                                        <img src="../../img/llave-inteligente.svg" width="15" height="20">
                                                                        <?php echo $row['estado'] ?> </a></td></td>

                                                            <td>
                                                            <button type="button" class="btn btn-primary btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>

                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header  bg-primary">
                                                                                <h4 class="modal-title" id="exampleModalLabel">Editar Programación</h4>

                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <form action="Editar_programacion.php" method="POST"  id="validacion2" data-parsley-required>
                                                                                    <div class="devit-card-custom">
                                                                                        <div class="form row">
                                                                                            <div class="form-group col-md-4">
                                                                                                <input type="hidden" name="id_programacion" id="id_programacion">
                                                                                                <label>Nombre</label>
                                                                                                <input name="nombre" type="text" class="form-control" id="nombre"  data-parsley-length="[3, 20]"> 
                                                                                            </div>
                                                                                            
                                                                                            <div class="form-group col-md-4">
                                                                                                <label>Persona a Cargo</label>
                                                                                                <select class="form-control" name="id_usuario" id="id_usuario">
                                                                                                    <?php    $query = "SELECT * from usuario where estado='Activo'";
                                                                                                                            $result_usuario = mysqli_query($conn, $query);?>
                                                                                                                            
                                                                                                    <option value="">Selecione</option> <?php
                                                                                                            while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                                                            <option value="<?php echo $row['id_usuario'] ?>"> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                                                </select> 
                                                                                            </div>
                                                                                            <div class="form-group col-md-4">
                                                                                                <label>Curso</label>
                                                                                                <select class="form-control" name="id_curso" id="id_curso">
                                                                                                    <?php    $query = "SELECT * from curso where yeacito = '2020'";
                                                                                                                            $result_curso = mysqli_query($conn, $query);?>
                                                                                                                            
                                                                                                    <option value="">Selecione</option> <?php
                                                                                                            while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                                                            <option value="<?php echo $row['id_curso'] ?>"> <?php echo $row['n_curso'] ?> </option> <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <label>Periodo</label>
                                                                                                <select class="form-control" name="id_periodo" id="id_periodo">
                                                                                                    <?php    $query = "SELECT * from periodo";
                                                                                                                            $result_periodo = mysqli_query($conn, $query);?>
                                                                                                                            
                                                                                                    <option value="">Selecione</option> <?php
                                                                                                            while ($row = mysqli_fetch_array($result_periodo)) { ?>
                                                                                                            <option value="<?php echo $row['id_periodo'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <label>Asignatura</label>
                                                                                                <select class="form-control" name="id_asignatura" id="id_asignatura">
                                                                                                    <?php    $query = "SELECT * from asignatura";
                                                                                                                            $result_asignatura = mysqli_query($conn, $query);?>
                                                                                                                            
                                                                                                    <option value="">Selecione</option> <?php
                                                                                                            while ($row = mysqli_fetch_array($result_asignatura)) { ?>
                                                                                                            <option value="<?php echo $row['id_asignatura'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                                </select>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>            
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                                        <button class=" btn btn-primary" name="Actualizar">Guardar</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                            </div>
                                            
                                            </td>
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
                </div></div></div></div></div>
                <?php
                include('../footer.php');
                ?>
            <!-- Consulta para editar en ventana modal 
            ============================================ -->
            <script src="../../assets/js/programaciones.js"></script>
              <!-- Validación combox 
            ============================================ -->
            <script src="../../assets/combox/combox.js" ></script>