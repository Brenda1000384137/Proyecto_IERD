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
                                        <li><a href="programacion.php">Programación</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Reportes</span>
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
                                    <h1>Mis <span class="table-project-n"></span>Avances</h1>
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
                                                            <th>Nota</th>
                                                            <th>Detalle</th>
                                                            <th>Plan</th>
                                                            <th>Nombre</th>
                                                            <th>Estado</th>
                                                            <th>Usuario</th>
                                                            <th>Curso</th>
                                                            <th>Periodo</th>
                                                            <th>Asignatura</th>
                                                            <th>Id Plan </th>
                                                            <th>Accion</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        $query = "SELECT N.id_nota,N.nota as NotaTablaNotas,N.id_detalle as detalleNota,N.id_plan as Plan ,
                                                        P.id_programacion as ID,P.nombre,P.estado,P.id_usuario,P.id_curso,P.id_periodo,P.id_asignatura as Asignatura,
                                                        PL.id_plan as IDPLAN ,PL.* FROM nota N 
                                                        INNER join plan_accion PL 
                                                        on N.id_plan = PL.id_plan INNER JOIN programacion P
                                                        ON PL.id_programacion = P.id_programacion";
                                                        $result_rols = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                            <tr>
                                                            <td> <?php echo $row['id_nota'] ?></td>
                                                            <td> <?php echo $row['NotaTablaNotas'] ?></td>
                                                            <td> <?php echo $row['detalleNota'] ?></td>
                                                            <td> <?php echo $row['Plan'] ?></td>
                                                            <td> <?php echo $row['nombre'] ?></td>
                                                            <td> <?php echo $row['estado'] ?></td>
                                                            <td> <?php echo $row['id_usuario'] ?></td>
                                                            <td> <?php echo $row['id_curso'] ?></td>
                                                            <td> <?php echo $row['id_periodo'] ?></td>
                                                            <td> <?php echo $row['Asignatura'] ?></td>
                                                            <td> <?php echo $row['IDPLAN'] ?></td>
                                                                <td> <a href="../../boton/boton_programacion.php?id_programacion=<?php echo $row['id_programacion'] ?>" class="btn btn-info">
                                                                        <img src="../../img/llave-inteligente.svg" width="15" height="20">
                                                                        <?php echo $row['estado'] ?> </a></td>
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
    </div></div>
    </div>
    <?php
include('../footer.php');
?>