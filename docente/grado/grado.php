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
                                            <li><span class="bread-blod">Grado</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div> <br>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Listado <span class="table-project-n">de</span> Grados</h1>
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
                                    <!-- prueba modal -->
                                    
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
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                                       
                                                            <?php
                                                            $query = "SELECT * FROM grado order by id_grado";
                                                            $result_grado = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result_grado)) { ?>
                                                        <tr>
                                                            <td> <?php echo $row['id_grado'] ?></td>
                                                            <td> <?php echo $row['nombre'] ?></td>
                                                            
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></div></div></div>
                <!-- Static Table End -->
                <div class="footer-copyright-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="footer-copy-right">
                                    <p>Copyright © 2020. Todos los derechos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- jquery
		============================================ -->
            <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
            <!-- Parsley
		============================================ -->
        <script src="../../js/parsley/parsley.min.js"></script>
        
            <!-- bootstrap JS
		============================================ -->
            <script src="../../js/bootstrap.min.js"></script>
            <!-- wow JS
		============================================ -->
            <script src="../../js/wow.min.js"></script>
            <!-- price-slider JS
		============================================ -->
            <script src="../../js/jquery-price-slider.js"></script>
            <!-- meanmenu JS
		============================================ -->
            <script src="../../js/jquery.meanmenu.js"></script>
            <!-- owl.carousel JS
		============================================ -->
            <script src="../../js/owl.carousel.min.js"></script>
            <!-- sticky JS
		============================================ -->
            <script src="../../js/jquery.sticky.js"></script>
            <!-- scrollUp JS
		============================================ -->
            <script src="../../js/jquery.scrollUp.min.js"></script>
            <!-- mCustomScrollbar JS
		============================================ -->
            <script src="../../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../../js/scrollbar/mCustomScrollbar-active.js"></script>
            <!-- metisMenu JS
		============================================ -->
            <script src="../../js/metisMenu/metisMenu.min.js"></script>
            <script src="../../js/metisMenu/metisMenu-active.js"></script>
            <!-- data table JS
		============================================ -->
            <script src="../../js/data-table/bootstrap-table.js"></script>
            <script src="../../js/data-table/tableExport.js"></script>
            <script src="../../js/data-table/data-table-active.js"></script>
            <script src="../../js/data-table/bootstrap-table-editable.js"></script>
            <script src="../../js/data-table/bootstrap-editable.js"></script>
            <script src="../../js/data-table/bootstrap-table-resizable.js"></script>
            <script src="../../js/data-table/colResizable-1.5.source.js"></script>
            <script src="../../js/data-table/bootstrap-table-export.js"></script>
            <!--  editable JS
		============================================ -->
            <script src="../../js/editable/jquery.mockjax.js"></script>
            <script src="../../js/editable/mock-active.js"></script>
            <script src="../../js/editable/select2.js"></script>
            <script src="../../js/editable/moment.min.js"></script>
            <script src="../../js/editable/bootstrap-datetimepicker.js"></script>
            <script src="../../js/editable/bootstrap-editable.js"></script>
            <script src="../../js/editable/xediable-active.js"></script>
            <!-- Chart JS
		============================================ -->
            <script src="../../js/chart/jquery.peity.min.js"></script>
            <script src="../../js/peity/peity-active.js"></script>
            <!-- tab JS
		============================================ -->
            <script src="../../js/tab.js"></script>
            <!-- plugins JS
		============================================ -->
            <script src="../../js/plugins.js"></script>
            <!-- main JS
		============================================ -->
            <script src="../../js/main.js"></script>
            <script src="../../assets/js/grados.js"></script>
             


</body>

</html>