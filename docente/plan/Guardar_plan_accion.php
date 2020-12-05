<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre_actividad = $_POST['nombre_actividad'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $id_programacion = $_POST['id_programacion'];
    $id_dimension = $_POST['id_dimension'];
    


if(isset($_POST['Guardar'])){
    $nombre_actividad = $_POST['nombre_actividad'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $id_programacion = $_POST['id_programacion'];
    $id_dimension = $_POST['id_dimension'];

    $query = "INSERT INTO plan_accion(nombre_actividad, fecha_inicio,  id_programacion, id_dimension) VALUES ('$nombre_actividad', '$fecha_inicio', '$id_programacion', '$id_dimension')";
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
