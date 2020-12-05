<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){
    $nombreu = $_POST['nombreu'];
    $apellido = $_POST['apellido'];
    $clave = md5(rand(00000,99999));
    $celular = $_POST['celular'];
    $id_tipo = $_POST['id_tipo'];
    $n_documento = $_POST['n_documento'];
    $id_rol= $_POST['id_rol'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $estado = 'Activo';

    $query = "INSERT INTO usuario  (nombre, apellido, clave, celular, id_tipo, n_documento, id_rol, correo, direccion, estado)
    VALUES ('$nombreu', '$apellido', '$clave', '$celular', '$id_tipo', '$n_documento', '$id_rol', '$correo', '$direccion', 'Activo')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo("Query Failed");

    }else{
        $_SESSION['message'] = 'Usuario guardado satisfactoriamente¡';
    }


    
    $SESSION['message_type'] = 'primary';

   header("Location: usuario.php");
}



?>