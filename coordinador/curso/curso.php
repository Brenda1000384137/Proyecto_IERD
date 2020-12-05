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
                            <a type="button" class="btn btn-danger btn-sm" href="../estudiante_curso/estu.php">Asignar Curso</a>
                            <button class="boton_personalizado" style="text-align: right;" data-toggle="modal" data-target="#modalForm">
                                <img src="../../img/iconos/svg/mas2.svg" width="15" height="15"> Curso
                            </button>
                            <div class="container p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal fade" id="modalForm" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header bg-primary">
                                                        <h4 align="left" class="modal-title" id="myModalLabel">
                                                            Agregar Curso</h4>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body ">
                                                        <form action="Guardar_curso.php"  id="validacion" method="POST">
                                                            <div class="devit-card-custom">
                                                                <div class="form row">
                                                                    <div class="form-group col-md-12">
                                                                        <label>Curso</label>
                                                                        <input type="number" class="form-control" name="n_curso" placeholder="Curso"  required>
                                                                    </div >
                                                                    <div class="form-group col-md-12">
                                                                        <label>Año</label>
                                                                        <input type="number" class="form-control" name="yeacito" placeholder="Curso"  required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal Footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <th>No. </th>
                                            <th>Nombre </th>
                                            <th>Año</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM curso";
                                        $result_rols = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result_rols)) { ?>
                                            <tr>
                                                <td> <?php echo $row['id_curso'] ?> </td>
                                                <td> <?php echo $row['n_curso'] ?> </td>
                                                <td> <?php echo $row['yeacito'] ?> </td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" href="listado.php?Curso=<?php echo $row['id_curso'] ?>"> <i class="fa fa-search"></i></a>
                                                    <button type="button" class="btn btn-primary btnEditar btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="fa fa-pencil"></i></button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header  bg-primary">
                                                                    <h4 class="modal-title" id="exampleModalLabel">Editar Curso</h4>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <form action="Editar_curso.php" method="POST">
                                                                        <div class="form-group col-md-12">
                                                                            <input type="hidden" name="id_curso" id="id_curso">
                                                                            <label>Curso</label>
                                                                            <input name="n_curso" type="number" class="form-control" id="n_curso">
                                                                            <input type="hidden" name="yeacito" id="yeacito">
                                                                            <label>Año</label>
                                                                            <input name="yeacito" type="year" class="form-control" id="yeacito">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                            <button class=" btn btn-primary" name="Actualizar">Guardar</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

<?php
include('../footer.php');
?>

<!-- Consulta para editar en ventana modal 
            ============================================ -->

<script src="../../assets/js/cursos.js"></script>
<script src="../../assets/js/cursoc.js"></script>