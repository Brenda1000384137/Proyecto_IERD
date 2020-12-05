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
                  <li><a href="coordinador.php">Inicio</a> <span class="bread-slash">/</span>
                  </li>
                  <li><a href="perfildocente.php">Perfil</a> <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">Cambio de Contraseña</span>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div><br>


    <div align="center" class="single-pro-review-area mt-t-30 mg-b-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="profile-info-inner">
              <div class="profile-details-hr">
                <div class="row">
                <div class="col-md-3">
                    
                    </div>
                  <div class="col-md-4">
                    <div  class="card"  style="width: 30rem;" >
                      <div class="card-body">
                        <h2 class="text-primary" class="card-title">Cambio de contraseña</h2><br><br>
                      </div>
                      <div class="text-left">
                        <form action="changePassword" method="post" name="frmChangePass" id="frmChangePass" >
                            <div class="form-group">
                                <label>Contraseña Actual</label>
                                <input type="password" class="form-control" name="txtPassUser" id="txtPassUser" placeholder="Contraseña actual" required>
                            </div>
                            <div class="form-group">
                                <label >Nueva Contraseña</label>
                                <input class="newPass form-control" type="password"  name="txtNewPassUser" id="txtNewPassUser"  placeholder="Nueva contraseña" required>
                            </div>
                            <div class="form-group">
                                <label >Confirmación</label>
                                <input class="newPass form-control" type="password"  name="txtPassConfirm" id="txtPassConfirm" placeholder="Confirmar contraseña" required>
                            </div>
                            <div class="alertChangePass" style="display: none;">
                            </div>
                            <div class="text-center">
                            <a class="btn btn-danger " href="perfildocente.php"></i> Volver</a>
                                <button type="submit" class="btn_save btnChangePass btn btn-primary">Cambiar</i></button>
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
    </div>
  </div>

 



<?php
include('../footer.php');
?> 
<script src="../../assets/js/validacion_contra.js"></script>
        