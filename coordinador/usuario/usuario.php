<?php
include('../sidebar.php');

	/* Connect To Database*/
	require_once ("../../bd/dbb.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../../bd/conexion.php");//
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
                            <li><span class="bread-blod">Usuario</span>
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
                            <h1>Listado <span class="table-project-n">de</span> Usuarios</h1>
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

                            <button class="boton_personalizado" style="text-align: right;" data-toggle="modal" data-target="#modalForm">
                                <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Usuario
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
                                                        <h4 align="left" class="modal-title" id="myModalLabel"> Agregar Usuario</h4>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body ">
                                                        <form action="Listar.php" method="POST" id="validacion" data-parsley-required>
                                                            <div class="devit-card-custom">
                                                                <div class="form row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Nombre</label>
                                                                        <input type="text" required class="form-control" name="nombreu" placeholder="Nombre" data-parsley-length="[3, 20]" data-parsley-pattern="/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1])[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Apellido</label>
                                                                        <input name="apellido" required type="text" required class="form-control" placeholder="Apellido" data-parsley-length="[3, 20]" data-parsley-pattern="/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1])[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Tipo Documento</label>
                                                                        <select required class="form-control" name="id_tipo">
                                                                            <?php $query = "SELECT * from tipo_documento";
                                                                            $result_documento = mysqli_query($conn, $query); ?>
                                                                            <option value="">Selecione </option> <?php
                                                                                                                    while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                <option value="<?php echo $row['id_tipo'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Número Documento</label>
                                                                        <input name="n_documento" type="number" required class="form-control" placeholder="N° Documento" data-parsley-validardocumento  data-parsley-type="number"  data-parsley-length="[8, 20]">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Rol</label>
                                                                        <select required class="form-control" name="id_rol">
                                                                            <?php $query = "SELECT * from rol where estado='Activo'";
                                                                            $result_rols = mysqli_query($conn, $query); ?>
                                                                            <option value="">Selecione </option> <?php
                                                                                                                    while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                                                <option value="<?php echo $row['id_rol'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Celular</label>
                                                                        <input name="celular" type="number" data-parsley-type="number" required class="form-control" placeholder="Celular" data-parsley-maxlength="10">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Correo</label>
                                                                        <input name="correo" type="email" required class="form-control" placeholder="Correo" data-parsley-validarcorreo  data-parsley-maxlength="40">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Dirección</label>
                                                                        <input name="direccion" type="text" required class="form-control" placeholder="Dirección" data-parsley-maxlength="40">
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

                                        <div class="dropdown mr-1">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                                Filtrar por
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="vwcoordinadores.php" class="list-group-item list-group-item-action"> Coordinadores</a>
                                                <a href="vwdocentes.php" class="list-group-item list-group-item-action"> Docentes</a>
                                                <a href="vwestudiantes.php" class="list-group-item list-group-item-action"> Estudiantes</a>

                                            </div>
                                            <a type="button" class="btn btn-warning btn-sm" href="../rol/rol.php">Ver Roles</a>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nombre</th>
                                                    <th>Celular</th>
                                                    <th>Tipo Documento</th>
                                                    <th>Nº Documento</th>
                                                    <th>Rol</th>
                                                    <th>Correo</th>
                                                    <th>Dirección</th>
                                                    <th>Estado</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $query = "SELECT id_usuario, u.nombre as nombreu, apellido, clave, celular, t.nombre as nombret, n_documento, r.nombre as nombrer, correo, direccion, u.estado FROM 
                                                            usuario u 
                                                            inner join tipo_documento t on t.id_tipo=u.id_tipo 
                                                            INNER join rol r on r.id_rol=u.id_rol
                                                            ORDER BY nombrer;";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_usuario'] ?></td>
                                                        <td> <?php echo  ucfirst($row['nombreu']) ?> <?php echo ucfirst($row['apellido']) ?></td>
                                                        <td> <?php echo $row['celular'] ?></td>
                                                        <td> <?php echo $row['nombret'] ?></td>
                                                        <td> <?php echo $row['n_documento'] ?></td>
                                                        <td> <?php echo $row['nombrer'] ?></td>
                                                        <td> <?php echo $row['correo'] ?></td>
                                                        <td> <?php echo ucfirst($row['direccion']) ?></td>
                                                        <td> <a href="../../boton/boton_usuario.php?id_usuario=<?php echo $row['id_usuario'] ?>" class="btn btn-primary">
                                                                <img src="../../img/llave-inteligente.svg" width="15" height="20">
                                                                <?php echo $row['estado'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>

                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header  bg-primary">
                                                                            <h4 class="modal-title" id="exampleModalLabel">Editar Usuario</h4>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <form action="Editar.php" method="POST" id="validacion2" data-parsley-required>
                                                                                <div class="devit-card-custom">
                                                                                    <div class="form row">
                                                                                        <div class="form-group col-md-6">
                                                                                            <input type="hidden" name="id_usuario" id="id_usuario">
                                                                                            <label>Nombre</label>
                                                                                            <input name="nombre" type="text"  class="form-control" id="nombre" required>
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label>Apellido</label>
                                                                                            <input name="apellido" required class="form-control" id="apellido" required>
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <Label>Tipo Documento</Label>
                                                                                            <select class="form-control" name="id_tipo" id="id_tipo">
                                                                                                <?php $query = "SELECT * from tipo_documento";
                                                                                                $result_documento = mysqli_query($conn, $query); ?>

                                                                                                <option value="">Selecione </option> <?php
                                                                                                                                        while ($row = mysqli_fetch_array($result_documento)) { ?>
                                                                                                    <option value="<?php echo $row['id_tipo'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label>Nº Documento</label>
                                                                                            <input name="n_documento" type="number" class="form-control" id="n_documento" data-parsley-type="number" required class="form-control" placeholder="N° Documento" data-parsley-length="[8, 20]">
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label>Celular</label>
                                                                                            <input name="celular" type="number" class="form-control" id="celular" data-parsley-maxlength="10">
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <Label>Rol</Label>
                                                                                            <select class="form-control" name="id_rol" id="id_rol">
                                                                                                <?php $query = "SELECT * from rol";
                                                                                                $result_asignatura = mysqli_query($conn, $query); ?>

                                                                                                <option value="">Selecione</option> <?php
                                                                                                                                    while ($row = mysqli_fetch_array($result_asignatura)) { ?>
                                                                                                    <option value="<?php echo $row['id_rol'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label>Correo</label>
                                                                                            <input name="correo" type="email" class="form-control" id="correo" data-parsley-maxlength="40">
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label> Direccion</label>
                                                                                            <input name="direccion" type="text" class="form-control" id="direccion" data-parsley-maxlength="40">
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
                                </div>
                            </div>
                        </div>
                    </div>
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
</div>
</div>
</div>
</div>

<?php
include('../footer.php');
?>
<!-- Consulta para editar en ventana modal 
		============================================ -->
<script src="../../assets/js/usuarios.js"></script>
