<?php
    require('../../bd/db.php');

    $id_plan = $_POST['id_plan'];

    $query = "SELECT u.nombre,u.apellido, d.id_usuario, d.id_curso, c.n_curso, d.id_detalle 
                FROM detalle_curso d 
                INNER JOIN usuario u ON u.id_usuario=d.id_usuario 
                INNER JOIN curso c ON c.id_curso=d.id_curso where c.id_curso=(SELECT prog.id_curso FROM plan_accion plan 
                INNER JOIN programacion prog ON prog.id_programacion = plan.id_programacion WHERE plan.id_plan='$id_plan')";
    $result_rols = mysqli_query($conn, $query);
    
    $html= "<option value=''>Seleccione</option>";
    while ($row = mysqli_fetch_array($result_rols))
    { 
        $html .= "<option value='".$row['id_detalle']."'>".$row['nombre'].$row['apellido'].
        "</option>";
    }
    echo $html;
?>