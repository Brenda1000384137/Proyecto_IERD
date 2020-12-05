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
                                                    <th>Asignatura</th>
                                                    <th>Nombre Estudiante</th>
                                                    <th>Actividad</th>
                                                    <th>Nota</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $id_asignatura=$_GET['Asignatura'];
                                                $query = "SELECT id_nota,nota.nota,plan.nombre_actividad,asig.nombre,u.nombre as nombreu ,u.apellido from nota INNER JOIN plan_accion plan on nota.id_plan=plan.id_plan INNER JOIN asignatura asig on nota.id_asignatura=asig.id_asignatura INNER JOIN detalle_curso de on nota.id_detalle=de.id_detalle INNER JOIN usuario u on de.id_usuario=u.id_usuario WHERE  nota.id_asignatura={$id_asignatura}";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                    <td> <?php echo $row['id_nota'] ?></td>
                                                        <td> <?php echo $row['nombre'] ?></td>
                                                        <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellido'] ?></td>
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

<!-- Consulta para editar en ventana modal 
            ============================================ -->
    <script src="../../assets/js/cursos.js"></script>