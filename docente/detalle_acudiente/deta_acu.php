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
                            <li><a href="../perfil/docente.php">Inicio</a> <span class="bread-slash">/</span></li>
                            <li><a href="../acudiente/acudiente.php">Acudiente</a> <span class="bread-slash">/</span></li>
                            <li><span class="bread-blod">Detalle</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Listado <span class="table-project-n">de</span> Acudientes</h1>
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
                                                    <th> Acudiente</th>
                                                    <th>Cel. Acudiente</th>
                                                    <th>Correo</th>
                                                    <th>Doc. Acudiente</th>
                                                    <th>Estudiante</th>
                                                    <th>Cel. Estudiante</th>
                                                    <th>Doc. Estudiante</th>
                                                    <th>Correo</th>
                                                    <th>Estado</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $query = "SELECT da.id_detalle, a.nombrea, a.apellido as apellidoa, a.telefono, a.correo as correoa, a.n_documento as n_documentoa,
                                                            u.nombre as nombreu, u.apellido as apellidou, u.celular, u.n_documento as n_documentou, u.correo as correou, da.estado
                                                            FROM detalle_acudiente da 
                                                            INNER JOIN acudiente a on a.id_acudiente = da.id_acudiente 
                                                            INNER JOIN usuario u on u.id_usuario = da.id_usuario  Where id_rol=2 ";
                                                $result_rols = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                    <tr>
                                                        <td> <?php echo $row['id_detalle'] ?></td>
                                                        <td> <?php echo $row['nombrea'] ?> <?php echo $row['apellidoa'] ?></td>
                                                        <td> <?php echo $row['telefono'] ?></td>
                                                        <td> <?php echo $row['correoa'] ?></td>
                                                        <td> <?php echo $row['n_documentoa'] ?></td>
                                                        <td> <?php echo $row['nombreu'] ?> <?php echo $row['apellidou'] ?></td>
                                                        <td> <?php echo $row['celular'] ?></td>
                                                        <td> <?php echo $row['n_documentou'] ?></td>
                                                        <td> <?php echo $row['correou'] ?></td>
                                                        <td> <?php echo $row['estado'] ?></td>
                                    </div>
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
<!-- Static Table End -->
<?php
include('../footer.php');
?>