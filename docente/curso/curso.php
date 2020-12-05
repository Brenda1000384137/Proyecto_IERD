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
                                        <li><span class="bread-blod">Curso</span>
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
                                    <h1>Listado <span class="table-project-n">de</span> Cursos</h1>
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
                                    <!-- prueba modal -->
                                    
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

                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT curso.id_curso,curso.n_curso,detalle_curso.id_detalle,nota.id_asignatura, asignatura.id_usuariod FROM curso INNER JOIN detalle_curso on curso.id_curso=detalle_curso.id_curso INNER JOIN nota on detalle_curso.id_detalle=nota.id_detalle INNER JOIN asignatura on nota.id_asignatura=asignatura.id_asignatura WHERE asignatura.id_usuariod = $_SESSION[id_usuario]";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_curso'] ?></td>
                                                        <td> <?php echo $row['n_curso'] ?></td>
                                                        <td>
                                                            <a  class="btn btn-success btn-sm" href="listado.php?Curso=<?php echo $row['id_curso'] ?>"> <i class="fa fa-search"></i></a>
                                                            
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

    <!-- Static Table End -->
    <?php
include('../footer.php');
?>