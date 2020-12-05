<?php
    require('../../bd/db.php');

    $id_usuario = $_POST['id_usuario'];

    $query = "Select id_asignatura, nombre from asignatura where id_usuariod='$id_usuario'";
    $result_rols = mysqli_query($conn, $query);
    
    $html= "<option value='0'>Seleccione</option>";
    while ($row = mysqli_fetch_array($result_rols))
    { 
        $html .= "<option value='".$row['id_asignatura']."'>".$row['nombre'].
        "</option>";
    }
    echo $html;
?>