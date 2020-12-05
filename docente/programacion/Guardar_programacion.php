<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre = $_POST['nombre'];
    $id_usuario = $_POST['id_usuario'];
    $id_curso = $_POST['id_curso'];
    $id_periodo = $_POST['id_periodo'];
    $id_asignatura = $_POST['id_asignatura'];
    
    if(empty($nombre)) {
        echo "<p class='error'>* Agrega el nombre</p>";
        die("validacion terminada");
    }

    if(empty($id_usuario)) {
        echo "<p class='error'>* Agrega el ID de usuario</p>";
        die("validacion terminada");
    }
    if(empty($id_curso)) {
        echo "<p class='error'>* Agrega el ID de  curso</p>";
        die("validacion terminada");
    }
    if(empty($id_periodo)) {
        echo "<p class='error'>* Agrega el ID de  periodo</p>";
        die("validacion terminada");
    }
    if(empty($id_asignatura)) {
        echo "<p class='error'>* Agrega el ID de  asignatura</p>";
        die("validacion terminada");
    }

if(isset($_POST['Guardar'])){
    $nombre = $_POST['nombre'];
    $id_usuario = $_POST['id_usuario'];
    $id_curso = $_POST['id_curso'];
    $id_periodo = $_POST['id_periodo'];
    $id_asignatura = $_POST['id_asignatura'];

    $query = "INSERT INTO programacion (nombre, id_usuario, id_curso, id_periodo, id_asignatura) VALUES ('$nombre', '$id_usuario', '$id_curso', '$id_periodo', '$id_asignatura')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Programacion guardada satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: programacion.php");
}

}
?>
