<?php
include("../bd/db.php");
// 1 Recibes variable id por get 
                 $id_rol = $_GET ['id_rol'];
                 $query;

//2 Consultar el registor por id
                $query = "SELECT * FROM rol where id_rol ={$id_rol}";
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
            $query = "UPDATE rol set estado = '$estadoNuevo' WHERE id_rol=$id_rol";
                $result_rols = mysqli_query($conn, $query);

                header('Location: ../coordinador/rol/rol.php');
                
?>         
                

          