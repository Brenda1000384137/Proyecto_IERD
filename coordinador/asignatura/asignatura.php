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
                            <li><span class="bread-blod">Asignatura</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Listado <span class="table-project-n">de</span> Asignaturas</h1>
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
                            <button class="boton_personalizado" data-toggle="modal" data-target="#modalForm">
                                <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Asignatura
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
                                                        <h4 align="left" class="modal-title" id="myModalLabel"> Agregar Asignatura</h4>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body ">
                                                        <form action="Guardar_asignatura.php" id="validacion" data-parsley-required method="POST">
                                                            <div class="devit-card-custom">
                                                                <div class="form row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Nombre</label>
                                                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" data-parsley-length="[5, 20]" data-parsley-pattern="/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1])[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Grado</label>
                                                                        <select class="form-control" name="id_grado">
                                                                            <?php $query = "SELECT * from grado";
                                                                            $result_grado = mysqli_query($conn, $query); ?>
                                                                            <option value="">Selecione</option> <?php
                                                                                                                while ($row = mysqli_fetch_array($result_grado)) { ?>
                                                                                <option value="<?php echo $row['id_grado'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Docente</label>
                                                                        <select class="form-control" name="id_usuariod">
                                                                            <?php $query = "SELECT * from usuario WHERE id_rol=1 and estado='Activo'";
                                                                            $result_grado = mysqli_query($conn, $query); ?>
                                                                            <option value="">Selecione</option> <?php
                                                                                                                while ($row = mysqli_fetch_array($result_grado)) { ?>
                                                                                <option value="<?php echo $row['id_usuario'] ?>"> <?php echo $row['nombre'] ?><?php echo $row['apellido'] ?> </option> <?php } ?>
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
                                                    <th>Asignatura </th>
                                                    <th>Grado</th>
                                                    <th>Docente</th>
                                                    <th>Ver detalles</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT asignatura.id_asignatura, asignatura.nombre as nombrea , grado.nombre as nombreg, usuario.nombre as nombreus, usuario.apellido as apellidou from asignatura asignatura INNER JOIN grado  on grado.id_grado=asignatura.id_grado INNER JOIN  usuario on usuario.id_usuario=asignatura.id_usuariod";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_asignatura'] ?></td>
                                                        <td> <?php echo $row['nombrea'] ?></td>
                                                        <td> <?php echo $row['nombreg'] ?></td>
                                                        <td> <?php echo $row['nombreus'] ?> <?php echo $row['apellidou'] ?></td>

                                                        <td>
                                                            <a class="btn btn-success btn-sm" href="listado.php?Asignatura=<?php echo $row['id_asignatura'] ?>"> <i class="fa fa-search"></i></a> </td>

                                                        <td>
                                                            <button type="button" class="btn btn-primary btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>

                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header  bg-primary">
                                                                            <h4 class="modal-title" id="exampleModalLabel">Editar Asignatura</h4>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="Editar_asignatura.php" id="validacion2" data-parsley-required method="POST">
                                                                                <div class="devit-card-custom">
                                                                                    <div class="form row">
                                                                                        <div class="form-group col-md-6">
                                                                                            <input type="hidden" name="id_asignatura" id="id_asignatura">
                                                                                            <label>Nombre</label>
                                                                                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" data-parsley-length="[5, 20]" data-parsley-pattern="/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1])[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g">
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label>Grado</label>
                                                                                            <select class="form-control" name="id_grado" id="id_grado">
                                                                                                <?php $query = "SELECT * from grado";
                                                                                                $result_grado = mysqli_query($conn, $query); ?>
                                                                                                <option value="">Selecione</option> <?php
                                                                                                                                    while ($row = mysqli_fetch_array($result_grado)) { ?>
                                                                                                    <option value="<?php echo $row['id_grado'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                            </select>
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
</div>
</div>
</div>
</div>

<?php
include('../footer.php');
?>

<!-- Consulta para editar en ventana modal 
            ============================================ -->
<script src="../../assets/js/asignaturas.js"></script>