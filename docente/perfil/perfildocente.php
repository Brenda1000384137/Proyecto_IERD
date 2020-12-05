<?php
include('../sidebar.php');



/* Connect To Database*/
require_once ("../../bd/dbb.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../../bd/conexion.php");//Contiene funcion que conecta a la base de datos

$query_empresa=mysqli_query($con,"select * from usuario where id_usuario = '$_SESSION[id_usuario]'");
$row=mysqli_fetch_array($query_empresa);

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
                  <li><span class="bread-blod">Perfil</span>
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
                        <h3 class="text-primary" class="card-title">Información del usuario:</h3>
                      </div>
                        <ul class="list-group list-group-flush" align="left">
                          <li class="list-group-item"><strong> Nombre: <?php echo ucfirst ($row['nombre']); ?>  <?php echo ucfirst ($row['apellido']); ?></strong></li>
                          <li class="list-group-item"><strong> Celular: <?php echo $row['celular']; ?> </strong></li>
                          <li class="list-group-item"><strong> Correo: <?php echo $row['correo']; ?>  </strong></li>
                          <li class="list-group-item"><strong> Dirección: <?php echo ucfirst ($row['direccion']); ?>  </strong></li>
                          <li class="list-group-item"><strong> Rol: Docente </strong></li>
                          <li  class="list-group-item"><a class="btn btn-primary btn-sm" href="editar_perfil.php?Usuario=<?php echo $_SESSION['id_usuario'] ?>"> Editar<i class="fa fa-pencil"></i></a>
                          <a class="btn btn-success btn-sm" href="cambiar_contra.php"> <i class="fa fa-pencil"></i> Cambiar contraseña</a>
                          </li>
                        </ul> 
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
if(isset($_POST['editar'])){
  $usuario = clean($_POST['id_usuario']);

$query = mysqli_query("UPDATE usuario SET  usuario='".$usuario."',");

?>

<?php
}

?>

                    <?php
include('../footer.php');
?>