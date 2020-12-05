<?php
    //Se agrega la conexión y la consulta
    require('../../bd/db.php');

    $correo = $_POST['correo'];
    $query = "SELECT * FROM usuario where correo= 'correo'";
    $row = mysqli_query($conn, $query);
    $respuesta = mysqli_fetch_assoc($row);
    if(isset($respuesta['correo'])){

        echo json_encode(false);
    }else{
        echo json_encode(true);
    }

?>

