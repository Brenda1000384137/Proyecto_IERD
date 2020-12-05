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
                                            <li><span class="bread-blod">Programación</span>
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
                                    <h1>Listado <span class="table-project-n">de</span> Programaciones</h1>
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
                                                            <th>Nombre</th>
                                                            <th>Persona A Cargo</th>
                                                            <th>Curso</th>
                                                            <th>Período</th>
                                                            <th>Asignatura</th>
                                                            <th>Estado</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

                                                            <?php
                                                             $query = " SELECT pl.id_plan,pl.nombre_actividad as nombreac, pl.fecha_inicio, pro.nombre as nombrepro, dime.nombre as nombredime, pro.id_usuario, u.nombre as nombreu, u.apellido as apellidou
                                                             FROM plan_accion pl 
                                                             inner join dimension dime on dime.id_dimension=pl.id_dimension 
                                                             inner join programacion pro on pro.id_programacion=pl.id_programacion
                                                             inner join usuario u on u.id_usuario=pro.id_usuario WHERE pro.id_usuario=$_SESSION[id_usuario]";
                                                            $result_rols = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_programacion'] ?></td>
                                                            <td> <?php echo $row['nombrepro'] ?></td>
                                                            <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellido'] ?></td>
                                                            <td> <?php echo $row['n_curso'] ?></td>
                                                            <td> <?php echo $row['nombreper'] ?></td>
                                                            <td> <?php echo $row['nombreasi'] ?></td>
                                                            <td> <?php echo $row['estado'] ?> </td>

                                                            
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
                </div></div></div></div></div>
                <?php
include('../footer.php');
?>