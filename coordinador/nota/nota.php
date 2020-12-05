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
                            <li><span class="bread-blod">Notas</span>
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
                            <h1>Listado <span class="table-project-n">de</span> Notas</h1>
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
                                            <th>Asignatura</th>
                                            <th>Estudiante</th>
                                            <th>Actividad</th>
                                            <th>Nota </th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $query = "SELECT id_nota,nota.nota,plan.nombre_actividad,u.nombre, u.apellido, asig.nombre as nombreasig 
                                                    FROM nota INNER JOIN plan_accion plan on nota.id_plan=plan.id_plan 
                                                    INNER JOIN detalle_curso de on de.id_detalle=nota.id_detalle 
                                                    INNER JOIN usuario u on de.id_usuario=u.id_usuario
                                                    INNER JOIN asignatura asig on asig.id_asignatura = nota.id_asignatura;";
                                        $result_nota = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result_nota)) { ?>
                                            <tr>
                                                <td> <?php echo $row['id_nota'] ?></td>
                                                <td> <?php echo $row['nombreasig'] ?></td>
                                                <td> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?></td>
                                                <td> <?php echo $row['nombre_actividad'] ?></td>
                                                <td> <?php echo $row['nota'] ?></td>
                                            
                                                <td>
                                                    <button type="button" class="btn btn-primary btnEditar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header  bg-primary">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Editar Nota </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="Editar_nota.php" id="validacion2" data-parsley-required method="POST">
                                                                        <div class="devit-card-custom">
                                                                            <div class="form row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Nota</label>
                                                                                    <input type="text" class="form-control" name="nota" id="nota" placeholder="Nota">
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Actividad</label>
                                                                                    <select class="form-control" name="id_plan" id="id_plan">
                                                                                        <?php $query = "SELECT * from plan_accion where estado='Activo'";
                                                                                        $result_curso = mysqli_query($conn, $query); ?>
                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                                            <option value="<?php echo $row['id_plan'] ?>"> <?php echo $row['nombre_actividad'] ?> </option> <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Estudiante</label>
                                                                                    <select class="form-control" name="id_detalle" id="id_detalle">
                                                                                        <?php $query = "SELECT id_detalle,u.nombre,u.apellido from detalle_curso de
                                                                                         INNER JOIN usuario u on de.id_usuario=u.id_usuario";
                                                                                        $result_usuario = mysqli_query($conn, $query); ?>

                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                                            <option value="<?php echo $row['id_detalle'] ?>"> <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?> </option> <?php } ?>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group col-md-6">
                                                                                    <label>Programación</label>
                                                                                    <select class="form-control" name="id_programacion" id="id_programacion">
                                                                                        <?php $query = "SELECT * from programacion";
                                                                                        $result_curso = mysqli_query($conn, $query); ?>
                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_curso)) { ?>
                                                                                            <option value="<?php echo $row['id_programacion'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Asignatura</label>
                                                                                    <select class="form-control" name="id_asignatura" id="id_asignatura">
                                                                                        <?php $query = "SELECT * From asignatura";
                                                                                        $result_usuario = mysqli_query($conn, $query); ?>

                                                                                        <option value="">Selecione</option> <?php
                                                                                                                            while ($row = mysqli_fetch_array($result_usuario)) { ?>
                                                                                            <optionx value="<?php echo $row['id_asignatura'] ?>"> <?php echo $row['nombre'] ?> </option> <?php } ?>
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
</div>
<?php
include('../footer.php');
?>
<!-- Consulta para editar en ventana modal 
            ============================================ -->
<script src="../../assets/js/notas.js"></script>
<!-- Validación combox 
            ============================================ -->
<script src="../../assets/combox/combox.js"></script>