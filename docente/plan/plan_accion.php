<?php
include('../sidebar.php');
?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="breadcome-heading">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                            <li><a href="../perfil/coordinador.php">Inicio</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Plan Acción </span>
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
                            <h1>Listado <span class="table-project-n">de</span> Planes de Acción</h1>
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
                                <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Plan Acción
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
                                    </div>

                                </div>

                            <?php session_unset();
                                        } ?>
                            <div class="modal fade" id="modalForm" role="dialog">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header bg-primary">
                                            <h4 align="left" class="modal-title" id="myModalLabel"> Agregar Plan de Acción</h4>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="modal-body ">
                                            <form action="Guardar_plan_accion.php" method="POST" id="validacion" data-parsley-required>
                                                <div class="devit-card-custom">
                                                    <div class="form row">
                                                        <div class="form-group col-md-6">
                                                            <label>Nombre Actividad</label>
                                                            <input type="text" class="form-control" name="nombre_actividad" placeholder="Nombre" data-parsley-length="[3, 20]">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Fecha Inicio</label>
                                                            <input name="fecha_inicio" type="date" class="form-control" placeholder="fecha_inicio">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Programación</label>
                                                            <select class="form-control" name="id_programacion">
                                                                <?php $query = "SELECT * from programacion where estado='Activo' and id_usuario=$_SESSION";
                                                                $result_curso = mysqli_query($conn, $query); ?>
                                                                <option value="">Selecione</option> <?php
                                                                                                    while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                    <option value="<?php echo $row['id_programacion'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Dimensión</label>
                                                            <select class="form-control" name="id_dimension">
                                                                <?php $query = "SELECT * from dimension where estado='Activo'";
                                                                $result_usuario = mysqli_query($conn, $query); ?>

                                                                <option value="">Selecione</option> <?php
                                                                                                    while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                    <option value="<?php echo $row['id_dimension'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
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
                                            <th>Programación </th>
                                            <th>Actividad</th>
                                            <th>Dimensión</th>
                                            <th>Docente</th>
                                            <th>Fecha Inicio</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT pl.id_plan,pl.nombre_actividad as nombreac, pl.estado, pl.fecha_inicio, pro.nombre as nombrepro, dime.nombre as nombredime, pro.id_usuario, u.nombre as nombreu, u.apellido as apellidou
                                        FROM plan_accion pl 
                                        inner join dimension dime on dime.id_dimension=pl.id_dimension 
                                        inner join programacion pro on pro.id_programacion=pl.id_programacion
                                        inner join usuario u on u.id_usuario=pro.id_usuario WHERE pro.id_usuario=$_SESSION[id_usuario]";


                                        $result_rols = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result_rols)) { ?>
                                            <tr>
                                                <td> <?php echo $row['id_plan'] ?></td>
                                                <td> <?php echo $row['nombrepro'] ?></td>
                                                <td> <?php echo $row['nombreac'] ?></td>
                                                <td> <?php echo $row['nombredime'] ?></td>
                                                <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellidou'] ?></td>
                                                <td> <?php echo $row['fecha_inicio'] ?></td>
                                                <td> <a href="../../boton/boton_plan.php?id_plan=<?php echo $row['id_plan'] ?>" class="btn btn-primary">
                                                        <img src="../../img/llave-inteligente.svg" width="15" height="20">
                                                        <?php echo $row['estado'] ?></td>

                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>
                                                    <a href="Eliminar_plan_accion.php?id_plan=<?php echo $row['id_plan'] ?>" class="btn btn-danger "><i class="fa fa-trash"></i></a>

                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header  bg-primary">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Editar Plan Acción </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="Editar_plan_accion.php" method="POST" id="validacion2" data-parsley-required>
                                                                        <div class="devit-card-custom">
                                                                            <div class="form row">
                                                                                <div class="form-group col-md-6">
                                                                                    <input type="hidden" name="id_plan" id="id_plan">
                                                                                    <label>Nombre Actividad</label>
                                                                                    <input type="text" class="form-control" name="nombre_actividad" id="nombre_actividad">
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Fecha Inicio</label>
                                                                                    <input name="fecha_inicio" type="date" class="form-control" id="fecha_inicio" data-parsley-length="[3, 20]">
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Programación</label>
                                                                                    <select class="form-control" name="id_programacion" id="id_programacion">
                                                                                        <?php $query = "SELECT * from programacion where estado='Activo'";
                                                                                        $result_curso = mysqli_query($conn, $query); ?>
                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                                            <option value="<?php echo $row['id_programacion'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Dimension</label>
                                                                                    <select class="form-control" name="id_dimension" id="id_dimension">
                                                                                        <?php $query = "SELECT * from dimension where estado='Activo'";
                                                                                        $result_usuario = mysqli_query($conn, $query); ?>
                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                                            <option value="<?php echo $row['id_dimension'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Modal Footer -->
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                            <button class=" btn btn-primary" name="Actualizar">Guardar</button>
                                                                        </div>
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
</div>
</div>
</div>
</div>
<?php
include('../footer.php');
?>

<!-- Consulta para editar en ventana modal 
            ============================================ -->
<script src="../../assets/js/planes.js"></script>