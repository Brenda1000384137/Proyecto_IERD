<?php

include("../../bd/db.php");

    
if(isset($_POST['Guardar'])){
    
    $nombre_dimension = $_POST['nombre'];
    $estado= $_POST['estado'];

    $query = "INSERT INTO dimension ( nombre, estado) VALUES ('$nombre', '$estado' )";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Dimensión guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: dimension.php");
}

?>