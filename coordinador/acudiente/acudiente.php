<?php
include('../sidebar.php');
?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                            <li><a href="../perfil/coordinador.php">Inicio</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Acudiente</span>
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
                                <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Acudiente
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
                                                        <h4 align="left" class="modal-title" id="myModalLabel"> Agregar Acudiente</h4>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body ">
                                                        <form action="guardar_acudiente.php" method="POST" id="validacion" data-parsley-required>
                                                            <div class="devit-card-custom">
                                                                <div class="form row">
                                                                    <div class="form-group col-md-4">
                                                                        <label>Nombre</label>
                                                                        <input type="text" class="form-control" name="nombrea" placeholder="Nombre">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label>Apellido</label>
                                                                        <input name="apellido" type="text" class="form-control" placeholder="Apellido">
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label>Celular</label>
                                                                        <input name="telefono" type="number" class="form-control" placeholder="Celular">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Correo</label>
                                                                        <input name="correo" type="email" class="form-control" placeholder="Correo ">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Número Documento</label>
                                                                        <input name="n_documento" type="number" class="form-control" placeholder="N° Documento">
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
                                        <a type="button" class="btn btn-danger btn-sm" href="../detalle_acudiente/deta_acu.php">Asignar Estudiantes</a>
                                    </div>
                                    <div>
                                       

                                    </div>
                                    <div class="card">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>No. </th>
                                                    <th>Nombre</th>
                                                    <th>Celular</th>
                                                    <th>Correo</th>
                                                    <th>Nº Documento</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM acudiente";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_acudiente'] ?></td>
                                                        <td> <?php echo $row['nombrea'] ?> <?php echo $row['apellido'] ?></td>
                                                        <td> <?php echo $row['telefono'] ?></td>
                                                        <td> <?php echo $row['correo'] ?></td>
                                                        <td> <?php echo $row['n_documento'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>

                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header  bg-primary">
                                                                            <h4 class="modal-title" id="exampleModalLabel">Editar Acudiente</h4>

                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="editar_acudiente.php" method="POST">

                                                                                <div class="form-group col-md-4">
                                                                                    <input type="hidden" name="id_acudiente" id="id_acudiente">
                                                                                    <label>Nombre</label>
                                                                                    <input name="nombrea" type="text" class="form-control" id="nombrea">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <label>Apellido</label>
                                                                                    <input name="apellido" class="form-control" id="apellido">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <label>Celular</label>
                                                                                    <input name="telefono" type="number" class="form-control" id="telefono">
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Correo</label>
                                                                                    <input name="correo" type="email" class="form-control" id="correo">
                                                                                </div>

                                                                                <div class="form-group col-md-6">
                                                                                    <label>Nº Documento</label>
                                                                                    <input name="n_documento" type="number" class="form-control" id="n_documento">
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
        </div>
    </div>
</div>
<?php
include('../footer.php');
?>
<!-- Consulta para editar en ventana modal 
            ============================================ -->
<script src="../../assets/js/acudientes.js"></script>