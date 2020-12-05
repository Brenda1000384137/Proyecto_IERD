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
                                            <li><a href="../perfil/estudiante.php">Inicio</a> <span class="bread-slash">/</span>
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
                                                        <th>#</th>
                                                        <th>Asignatura </th>
                                                            <th>Estudiante</th>
                                                            <th>Actividad</th>
                                                            <th>Nota</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php
                                                            $query = "SELECT n.id_nota,n.nota, n.id_plan, plan.nombre_actividad, n.id_detalle, d.id_usuario, u.nombre as nombreu, u.apellido as apellidou, n.id_asignatura, asig.nombre as nombreasig FROM nota n INNER JOIN plan_accion plan on plan.id_plan = n.id_plan INNER JOIN asignatura asig on asig.id_asignatura = n.id_asignatura INNER JOIN detalle_curso d on d.id_detalle = n.id_detalle INNER JOIN usuario u on u.id_usuario = d.id_usuario WHERE u.id_usuario=$_SESSION[id_usuario];";
                                                            $result_nota = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_nota)) { ?>
                                                        <tr>
                                                           
                                                        <td> <?php echo $row['id_nota'] ?></td>
                                                            <td> <?php echo $row['nombreasig'] ?></td>
                                                            <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellidou'] ?></td>
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
                    </div></div></div></div></div>
                </div>
                <?php
include('../footer.php');
?>