<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre = $_POST['nombre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_cierre = $_POST['fecha_cierre'];
    $fecha_entrega_notas = $_POST['fecha_entrega_notas'];

if(isset($_POST['Guardar'])){
    $nombre= $_POST['nombre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_cierre = $_POST['fecha_cierre'];
    $fecha_entrega_notas = $_POST['fecha_entrega_notas'];
    $query = "INSERT INTO periodo(nombre, fecha_inicio , fecha_cierre  , fecha_entrega_notas ) VALUES ('$nombre', '$fecha_inicio',  '$fecha_cierre','$fecha_entrega_notas' )";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Periodo guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: periodo.php");
}
}
?>
