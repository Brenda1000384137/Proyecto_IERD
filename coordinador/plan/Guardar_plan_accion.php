<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre_actividad = $_POST['nombre_actividad'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $id_programacion = $_POST['id_programacion'];
    $id_dimension = $_POST['id_dimension'];
    $estado = 'Activo';
    


if(isset($_POST['Guardar'])){
    $nombre_actividad = $_POST['nombre_actividad'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $id_programacion = $_POST['id_programacion'];
    $id_dimension = $_POST['id_dimension'];
    $estado = 'Activo';
    

    $query = "INSERT INTO plan_accion(nombre_actividad, fecha_inicio, id_programacion, id_dimension, estado ) VALUES ('$nombre_actividad', '$fecha_inicio',  '$id_programacion', '$id_dimension', 'Activo')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Plan de Accíon guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: plan_accion.php");
}
}
?>
