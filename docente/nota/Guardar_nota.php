<?php

include("../../bd/db.php");

if(isset($_POST['Guardar'])){
    $id_nota = $_POST['id_nota'];
    $nota = $_POST['nota'];
    $id_plan = $_POST['id_plan'];
    $id_detalle = $_POST['id_detalle'];
    $id_asignatura = $_POST['id_asignatura'];
    


if(isset($_POST['Guardar'])){
    $id_nota = $_POST['id_nota'];
    $nota = $_POST['nota'];
    $id_plan = $_POST['id_plan'];
    $id_detalle = $_POST['id_detalle'];
    $id_asignatura = $_POST['id_asignatura'];

    $query = "INSERT INTO nota(id_nota , nota , id_plan, id_detalle, id_asignatura) VALUES ('$id_nota' ,'$nota', '$id_plan', '$id_detalle', '$id_asignatura')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Nota guardada satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: nota.php");
}
}
?>