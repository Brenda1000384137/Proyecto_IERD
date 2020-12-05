<?php
include("../bd/db.php");
// 1 Recibes variable id por get 
                 $id_usuario = $_GET ['id_usuario'];
                 $query;

//2 Consultar el registor por id
                $query = "SELECT * FROM usuario where id_usuario ={$id_usuario}";
                $result_rols = mysqli_query($conn, $query);
                    
                
                
				//3 recorrer y validar el estado
                $estadoNuevo;
                $result_rols= mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($result_rols)) {

					if($row['estado'] == 'Activo'){

						$estadoNuevo= 'Inactivo';

					}else {

						$estadoNuevo = 'Activo';
					}

				}
                //paso 4   hacer update con la variable  estadoNuevo
            $query = "UPDATE usuario set estado = '$estadoNuevo' WHERE id_usuario=$id_usuario";
                $result_rols = mysqli_query($conn, $query);

                header('Location: ../coordinador/usuario/usuario.php');
                
?>         
                

          