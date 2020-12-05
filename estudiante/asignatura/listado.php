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
                                        <li><a href="../perfil/estudiante.php">Inicio</a> <span class="bread-slash">/</span>
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
                                                    <th>Asignaturas</th>
                                                    <th>Nombre Estudiantes</th>
                                                    <th>Actividad</th>
                                                    <th>Nota</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $id_asignatura=$_GET['Asignatura'];
                                                $query = "SELECT detalle_curso.id_detalle, curso.n_curso , asignatura.nombre as nombrea , 
                                                usuario.nombre as nombree , usuario.apellido as apellidoe , plan_accion.nombre_actividad, 
                                                nota.nota from nota INNER JOIN detalle_curso on nota.id_detalle=detalle_curso.id_detalle 
                                                INNER JOIN asignatura on nota.id_asignatura=asignatura.id_asignatura INNER JOIN usuario
                                                 on detalle_curso.id_usuario=usuario.id_usuario INNER JOIN plan_accion on nota.id_plan=plan_accion.id_plan INNER JOIN curso on detalle_curso.id_curso=curso.id_curso WHERE nota.id_asignatura='{$id_asignatura}' and detalle_curso.id_usuario = $_SESSION[id_usuario]";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_detalle'] ?></td>
                                                        <td> <?php echo $row['n_curso'] ?></td>
                                                        <td> <?php echo $row['nombrea'] ?></td>
                                                        <td> <?php echo $row['nombree'] ?> <?php echo $row['apellidoe'] ?></td>
                                                        <td> <?php echo $row['nombre_actividad'] ?></td>
                                                        <td> <?php echo $row['nota'] ?></td>


                                                        
                                                        
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