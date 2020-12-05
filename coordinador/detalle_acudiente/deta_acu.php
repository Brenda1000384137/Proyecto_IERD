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
                            <li><a href="../perfil/coordinador.php">Inicio</a> <span class="bread-slash">/</span></li>
                            <li><a href="../acudiente/acudiente.php">Acudiente</a> <span class="bread-slash">/</span></li>
                            <li><span class="bread-blod">Detalle</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><br>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Listado <span class="table-project-n">de</span> Acudientes</h1>
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
                                <img src="../../img/iconos/svg/familia.svg" width="15" height="15"> Asignar
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
                                            <div class="modal-dialog modal-lg ">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header bg-primary">
                                                        <h4 align="left" class="modal-title" id="myModalLabel"> Asignación de Acudientes</h4>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body ">
                                                        <form action="guardar_acu.php" method="POST">
                                                            <div class="devit-card-custom">
                                                                <div class="form row">
                                                                    <div class=" ml-12 col-md-6 mt-12">
                                                                        <div class="form-group col-md-12">
                                                                            <label>Acudiente</label>
                                                                            <select class="form-control" name="id_acudiente" id="id_acu">
                                                                                <?php $query = "SELECT * from acudiente";
                                                                                $result_documento = mysqli_query($conn, $query); ?>
                                                                                <option value="">Selecione </option> <?php
                                                                                                                        while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                    <option value="<?php echo $row['id_acudiente'] ?>"> <?php echo $row['nombrea'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label>Estudiante</label>
                                                                            <select class="form-control" name="id_usuario" id="id_usuario">
                                                                                <?php $query = "SELECT * from usuario where id_rol=2";
                                                                                $result_documento = mysqli_query($conn, $query); ?>
                                                                                <option value="">Selecione </option> <?php
                                                                                                                        while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                    <option value="<?php echo $row['id_usuario'] ?>"> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label>Estado</label>
                                                                            <input name="estado" type="text" class="form-control" id="estado">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" ml-12 col-md-6 mt-12">
                                                                        <h4 class="ml-12">Detalle</h4>
                                                                        <div class=" form-group col-md-12 mt-0 align-self-end">
                                                                            <div class=" mt-12 pt-12  d-flex  align-self-start">
                                                                                <a class=" btn btn-warning btn-sm text-white " id="addElement">
                                                                                    <i class="fa fa-plus"></i> Acudiente</a>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-12" id="list-acudiente">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal Footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <input id="submit" type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
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
                                                    <th>#</th>
                                                    <th> Acudiente</th>
                                                    <th>Celular Acudiente</th>
                                                    <th>Correo</th>
                                                    <th>Documento Acudiente</th>
                                                    <th>Estudiante</th>
                                                    <th>Celular Estudiante</th>
                                                    <th>Documento Estudiante</th>
                                                    <th>Correo</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $query = "SELECT da.id_detalle, a.nombrea, a.apellido as apellidoa, a.telefono, a.correo as correoa, a.n_documento as n_documentoa,
                                                            u.nombre as nombreu, u.apellido as apellidou, u.celular, u.n_documento as n_documentou, u.correo as correou, da.estado
                                                            FROM detalle_acudiente da 
                                                            INNER JOIN acudiente a on a.id_acudiente = da.id_acudiente 
                                                            INNER JOIN usuario u on u.id_usuario = da.id_usuario  Where id_rol=2 ";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_detalle'] ?></td>
                                                        <td> <?php echo $row['nombrea'] ?> <?php echo $row['apellidoa'] ?></td>
                                                        <td> <?php echo $row['telefono'] ?></td>
                                                        <td> <?php echo $row['correoa'] ?></td>
                                                        <td> <?php echo $row['n_documentoa'] ?></td>
                                                        <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellidou'] ?></td>
                                                        <td> <?php echo $row['celular'] ?></td>
                                                        <td> <?php echo $row['n_documentou'] ?></td>
                                                        <td> <?php echo $row['correou'] ?></td>
                                                        <td> <?php echo $row['estado'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header  bg-primary">
                                                                            <h4 class="modal-title" id="exampleModalLabel">Editar Información</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="editar_acu.php" method="POST">
                                                                                <div class="devit-card-custom">
                                                                                    <div class="form row">
                                                                                        <div class="form-group col-md-4">
                                                                                            <label>Acudiente</label>
                                                                                            <input type="hidden" name="id_detalle" id="id_detalle">
                                                                                            <select class="form-control" name="id_acudiente" id="id_acudiente">
                                                                                                <?php $query = "SELECT * from acudiente";
                                                                                                $result_documento = mysqli_query($conn, $query); ?>
                                                                                                <option value="">Selecione </option> <?php while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                                    <option value="<?php echo $row['id_acudiente'] ?>"> <?php echo $row['nombrea'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group col-md-4">
                                                                                            <label>Estudiante</label>
                                                                                            <select class="form-control" name="id_usuario" id="id_usuario">
                                                                                                <?php $query = "SELECT * from usuario where id_rol=2";
                                                                                                $result_documento = mysqli_query($conn, $query); ?>
                                                                                                <option value="">Selecione </option> <?php while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                                    <option value="<?php echo $row['id_usuario'] ?>"> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group col-md-4">
                                                                                            <label>Estado</label>
                                                                                            <input name="estado" type="text" class="form-control" id="estado">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Modal Footer -->
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
<?php
include('../footer.php');
?>

<!-- Consulta para editar en ventana modal 
            ============================================ -->
<script src="../../assets/js/detalles.js"></script>
<script src="../../assets/js/estudiante_acudiente.js"></script>