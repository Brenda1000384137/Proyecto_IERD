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
                                            <li><a href="../perfil/estudiante.php">Inicio</a> <span class="bread-slash">/</span></li>
                                            <li><a href="../curso/curso.php">Curso</a> <span class="bread-slash">/</span></li>
                                            <li><span class="bread-blod">Detalle</span></li>
                                        </ul>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
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
                                                            <th>#</th>
                                                            <th> Estudiantes</th>
                                                            <th>Curso</th>
                                                            <th>Estado</th>
                                                            <th>Año</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        $query = "SELECT de.id_detalle, u.nombre, u.apellido, cur.n_curso, de.estado,de.year
                                                            FROM detalle_curso de INNER JOIN usuario u on u.id_usuario = de.id_usuario 
                                                            INNER JOIN curso cur on cur.id_curso = de.id_curso ";
                                                        $result_rols = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                            <tr>
                                                                <td> <?php echo $row['id_detalle'] ?></td>
                                                                <td> <?php echo $row['nombre'] ?>
                                                                    <?php echo $row['apellido'] ?></td>
                                                                <td> <?php echo $row['n_curso'] ?></td>
                                                                <td> <?php echo $row['estado'] ?></td>
                                                                <td> <?php echo $row['year'] ?></td>

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
    <?php
include('../footer.php');
?>