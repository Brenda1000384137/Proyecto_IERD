<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombrea = $_POST['nombrea'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $n_documento  = $_POST['n_documento'];

    
    if(empty($nombrea)) {
        echo "<p class='error'>* Agrega el nombre</p>";
        die("validacion terminada");
    }
    if(empty($apellido)) {
        echo "<p class='error'>* Agrega el apellido</p>";
        die("validacion terminada");
    }
    if(empty($telefono)) {
        echo "<p class='error'>* Agrega el telefono</p>";
        die("validacion terminada");
    }
    if(empty($correo)) {
        echo "<p class='error'>* Agrega el correo</p>";
        die("validacion terminada");
    }


if(isset($_POST['Guardar'])){
    $nombrea = $_POST['nombrea'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $n_documento  = $_POST['n_documento'];


    $query = "INSERT INTO acudiente (nombrea, apellido, telefono,correo, n_documento) VALUES ('$nombrea', '$apellido', '$telefono','$correo', '$n_documento')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Acudiente guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: acudiente.php");
}

}

?>