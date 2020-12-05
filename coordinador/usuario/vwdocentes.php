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
                                        <li><a href="../../coordinador.php">Inicio</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><a href="usuario.php">Usuario</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Docentes</span>
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
                                    <h1>Listado <span class="table-project-n">de</span> Docentes</h1>
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

                                                <div class="dropdown mr-1">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                                        Filtrar por
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="vwcoordinadores.php" class="list-group-item list-group-item-action"> Coordinadores</a>
                                                        <a href="vwdocentes.php" class="list-group-item list-group-item-action"> Docentes</a>
                                                        <a href="vwestudiantes.php" class="list-group-item list-group-item-action"> Estudiantes</a>
                                                        
                                                    </div>
                                                    <a  type="button" class="btn btn-warning btn-sm" href="../rol/rol.php">Ver Roles</a>
                                                </div>
                                            </div>
                                            <div class="card">

                                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

                                                    <thead>
                                                        <tr>
                                                            <th>No. </th>
                                                            <th>Nombre</th>
                                                            <th>Tipo Documento</th>
                                                            <th>Nº Documento</th>
                                                            <th>Celular</th>
                                                            <th>Correo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                        $query = "SELECT id_usuario, u.nombre as nombreu, apellido, celular,  t.nombre as nombret, n_documento, r.nombre as nombrer, correo FROM 
                                                            usuario u 
                                                            inner join tipo_documento t on t.id_tipo=u.id_tipo 
                                                            INNER join rol r on r.id_rol=u.id_rol
                                                            where r.id_rol=1";
                                                        $result_rols = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array($result_rols)) { ?>
                                                            <tr>
                                                                <td> <?php echo $row['id_usuario'] ?></td>
                                                                <td> <?php echo ucfirst( $row['nombreu']) ?> <?php echo ucfirst( $row['apellido']) ?></td>
                                                                <td> <?php echo $row['nombret'] ?></td>
                                                                <td> <?php echo $row['n_documento'] ?></td>
                                                                <td> <?php echo $row['celular'] ?></td>
                                                                <td> <?php echo $row['correo'] ?></td>
                                                                
                                                                
                                            </tr>
                                        <?php } ?>
                                        </div>
                                    </div></div></div>
                                        </tbody>
                                        </table>
                                        </div>
                                    </div>
                </div>
            </div></div></div>
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