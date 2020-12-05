<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){

    $nombre = $_POST['nombre'];
    $estado = 'Activo';
    $id_usuario = $_POST['id_usuario'];
    $id_curso = $_POST['id_curso'];
    $id_periodo = $_POST['id_periodo'];
    $id_asignatura = $_POST['id_asignatura'];
    

if(isset($_POST['Guardar'])){
    $nombre = $_POST['nombre'];
    $estado = 'Activo';
    $id_usuario = $_POST['id_usuario'];
    $id_curso = $_POST['id_curso'];
    $id_periodo = $_POST['id_periodo'];
    $id_asignatura = $_POST['id_asignatura'];

    $query = "INSERT INTO programacion (nombre, estado, id_usuario, id_curso, id_periodo, id_asignatura) VALUES ('$nombre', 'Activo', '$id_usuario', '$id_curso', '$id_periodo', '$id_asignatura')";
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
