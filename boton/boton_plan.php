<?php
include("../bd/db.php");
    // 1 Recibes variable id por get 
        $id_plan = $_GET ['id_plan'];
        $query;

    //2 Consultar el registor por id
        $query = "SELECT * FROM plan_accion where id_plan ={$id_plan}";
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
        $query = "UPDATE plan_accion set estado = '$estadoNuevo' WHERE id_plan=$id_plan";
        $result_rols = mysqli_query($conn, $query);
        header('Location: ../coordinador/plan/plan_accion.php');
               
?>         
                

          