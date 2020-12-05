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
                                            <li><a href="../perfil/docente.php">Inicio</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Asignatura</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            <br></div>
        </div> 
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Listado <span class="table-project-n">de</span> Asignaturas</h1>
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
                                                            <th>No. </th>
                                                            <th>Asignatura </th>
                                                            <th>Grado</th>
                                                            <th>Docente</th>
                                            
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $query ="SELECT asignatura.id_asignatura, asignatura.nombre as nombrea , grado.nombre as nombreg, usuario.nombre as nombreus, usuario.apellido as apellidou from asignatura asignatura INNER JOIN grado  on grado.id_grado=asignatura.id_grado INNER JOIN  usuario on usuario.id_usuario=asignatura.id_usuariod WHERE asignatura.id_usuariod=$_SESSION[id_usuario]";
                                                            $result_rols = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_asignatura'] ?></td>
                                                            <td> <?php echo $row['nombrea'] ?></td>
                                                            <td> <?php echo $row['nombreg'] ?></td>
                                                            <td> <?php echo $row['nombreus']?> <?php  echo$row['apellidou']?></td>

                                                            <td>
                                                            <a  class="btn btn-success btn-sm" href="listado.php?Asignatura=<?php echo $row['id_asignatura'] ?>"> <i class="fa fa-search"></i></a> </td>
                                                            
                                                           
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