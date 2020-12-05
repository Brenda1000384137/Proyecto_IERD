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
                                    <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <div id="toolbar">
                                            </div>
                                            <div class="card">
                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                    <thead>
                                                        <tr>
                                                            <th># </th>
                                                            <th>Programación </th>
                                                            <th>Actividad</th>
                                                            <th>Dimensión</th>
                                                            <th>Estudiante</th>
                                                            <th>Nota</th>
                                                            <th>Fecha Inicio</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

                                                            <?php
                                                             $query = "SELECT programacion.nombre as nombrepro, plan_accion.nombre_actividad, dimension.nombre, usuario.nombre as nombree, usuario.apellido as apellidoe, nota.nota, plan_accion.fecha_inicio from nota INNER JOIN plan_accion on nota.id_nota=plan_accion.id_plan INNER JOIN programacion on plan_accion.id_programacion=programacion.id_programacion INNER JOIN dimension on plan_accion.id_dimension=dimension.id_dimension INNER JOIN detalle_curso on nota.id_detalle=detalle_curso.id_detalle INNER JOIN usuario on detalle_curso.id_usuario=usuario.id_usuario WHERE detalle_curso.id_usuario=$_SESSION[id_usuario]";
                                                             
                                                            $result_rols = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_plan'] ?></td>
                                                            <td> <?php echo $row['nombrepro'] ?></td>
                                                            <td> <?php echo $row['nombreac'] ?></td>
                                                            <td> <?php echo $row['nombredime'] ?></td>
                                                            <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellidou'] ?></td>
                                                            <td> <?php echo $row['nota'] ?></td>
                                                            <td> <?php echo $row['fecha_inicio'] ?></td>
                                                   
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
                </div></div></div></div>
                <?php
include('../footer.php');
?>