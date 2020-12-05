<?php
    require('../../bd/db.php');

    $id_asignatura = $_POST['id_asignatura'];

    $query = "SELECT id_plan, plan.nombre_actividad, plan.id_programacion,  pro.id_asignatura, asig.nombre as nombreasig 
                from plan_accion plan 
                INNER JOIN programacion pro ON pro.id_programacion = plan.id_programacion 
                INNER JOIN asignatura asig ON asig.id_asignatura = pro.id_asignatura 
                WHERE asig.id_asignatura='$id_asignatura'";
    $result_rols = mysqli_query($conn, $query);
    
    $html= "<option value=''>Seleccione</option>";
    while ($row = mysqli_fetch_array($result_rols))
    { 
        $html .= "<option value='".$row['id_plan']."'>".$row['nombre_actividad'].
        "</option>";
    }
    echo $html;
?>
