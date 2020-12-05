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
                                                            <th># </th>
                                                            <th>Nombre </th>
                                                            <th>Docente</th>
                                                            <th>Curso</th>
                                                            <th>Consultar</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $query = "SELECT asig.id_asignatura,asig.nombre, usuario.nombre as nombred,usuario.apellido as apellidod, curso.n_curso  FROM nota INNER JOIN asignatura asig on nota.id_asignatura=asig.id_asignatura INNER JOIN usuario on asig.id_usuariod=usuario.id_usuario INNER JOIN detalle_curso on nota.id_detalle=detalle_curso.id_detalle INNER JOIN curso on detalle_curso.id_curso=curso.id_curso WHERE detalle_curso.id_usuario =$_SESSION[id_usuario]";
                                                            $result_rols = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_asignatura'] ?></td>
                                                            <td> <?php echo $row['nombre'] ?></td>
                                                            <td> <?php echo $row['nombred'] ?> <?php echo $row['apellidod'] ?></td>
                                                            <td><?php echo $row['n_curso'] ?></td>
                                                            <td>   <a  class="btn btn-success btn-sm" href="listado.php?Asignatura=<?php echo $row['id_asignatura'] ?>"> <i class="fa fa-search"></i></a> </td>

                                                                                            
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