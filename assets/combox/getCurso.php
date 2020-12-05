<?php
    require('../../bd/db.php');

    $id_asignatura = $_POST['id_asignatura'];
    $yea= date('Y');
    $query = "SELECT * from curso where n_curso like CONCAT( (SELECT grad.nombre as nombregrad FROM asignatura asig INNER JOIN grado grad 
    ON grad.id_grado = asig.id_grado where id_asignatura='$id_asignatura'), '%' ) and '$yea'";
    $result_rols = mysqli_query($conn, $query);

    $html= "<option value='0'>Seleccione</option>";
    while ($row = mysqli_fetch_array($result_rols))
    { 
        $html .= "<option value='".$row['id_curso']."'>".$row['n_curso'].
        "</option>";

    }

    echo $html;
?>





