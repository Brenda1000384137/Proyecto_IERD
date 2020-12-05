<?php
include("../bd/db.php");
// 1 Recibes variable id por get 
                 $id_programacion = $_GET ['id_programacion'];
                 $query;

//2 Consultar el registor por id
                $query = "SELECT * FROM programacion where id_programacion ={$id_programacion}";
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
            $query = "UPDATE programacion set estado = '$estadoNuevo' WHERE id_programacion=$id_programacion";
                $result_rols = mysqli_query($conn, $query);

                header('Location: ../coordinador/programacion/programacion.php');
                
?>         
                

          