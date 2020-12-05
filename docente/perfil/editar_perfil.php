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
                  <li><a href="perfildocente.php">Perfil</a> <span class="bread-slash">/</span>
                  </li>
                  <li><span class="bread-blod">Editar Perfil</span>
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
                        <h5 class="text-primary" class="card-title">Información del usuario:</h5>
                      </div>
                        <ul class="list-group list-group-flush" align="left">
						<form method="POST" action="editar.php" enctype="multipart/form-data" id="perfil">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >

            <div class="panel-body">
              <div class="row">
			  
                <div class="col-md-3 col-lg-3 " align="center"> 			
					<div class="row">
  						<div class="col-md-12">
							<div class="form-group">
							</div>
						</div>
						
					</div>
				</div>
                <div class=" col-md-12"> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombres:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre" value="<?php echo $row['nombre']?>" required></td>
                      </tr>
                      <tr>
                        <td>Apellido:</td>
                        <td><input type="text" class="form-control input-sm" name="apellido" value="<?php echo $row['apellido']?>" required></td>
                      </tr>
                     
					  <tr>
                        <td>Celular::</td>
                        <td><input type="text" class="form-control input-sm" required name="celular" value="<?php echo $row['celular']?>"></td>
                      </tr>
					  <tr>
                        <td>Correo:</td>
                        <td><input type="email" class="form-control input-sm" name="correo" value="<?php echo $row['correo']?>" ></td>
                      </tr>

                      <tr>
                        <td>Dirección:</td>
                        <td><input type="text" class="form-control input-sm" required name="direccion" value="<?php echo $_SESSION['direccion']?>"></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                 <div class="panel-footer text-center">
                    
                     
                <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar usuario</button>

                       
                       
            
          </div>
        </div>
		</form>
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
include('../footer.php');

?>    


<script>
$( "#perfil" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "editar_usuario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})
		
</script>
