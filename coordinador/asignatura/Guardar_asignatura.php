<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre = $_POST['nombre'];
    $id_grado = $_POST['id_grado'];
    $id_usuariod = $_POST['id_usuariod'];

if(isset($_POST['Guardar'])){
    $nombre = $_POST['nombre'];
    $id_grado = $_POST['id_grado'];
    $id_usuariod = $_POST['id_usuariod'];
    $query = "INSERT INTO asignatura(nombre, id_grado , id_usuariod ) VALUES ('$nombre', '$id_grado' , '$id_usuariod')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Asignatura guardada satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: asignatura.php");
}
}
?>
