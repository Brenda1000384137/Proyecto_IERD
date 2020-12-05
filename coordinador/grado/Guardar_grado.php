<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){
    $nombre = $_POST['nombre'];
    if(empty($nombre)) {
        echo "<p class='error'>* Agrega el nombre</p>";
        die("validacion terminada");
    }

if(isset($_POST['Guardar'])){
    $nombre = $_POST['nombre'];
    $query = "INSERT INTO grado(nombre) VALUES ('$nombre')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Grado guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: grado.php");
}
}
?>
