<?php

include("../../bd/db.php");


if  (isset($_GET['id_programacion'])) {
  $id_programacion = $_GET['id_programacion'];
  $query = "SELECT * FROM programacion WHERE id_programacion=$id_programacion";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
   
    $id_usuario = $row['id_usuario'];
    $id_curso = $row['id_curso'];
    $id_periodo = $row['id_periodo'];
    $id_asignatura = $row['id_asignatura'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_programacion = $_POST['id_programacion'];
    $nombre= $_POST['nombre'];
   
    $id_usuario = $_POST['id_usuario'];
    $id_curso = $_POST['id_curso'];
    $id_periodo = $_POST['id_periodo'];
    $id_asignatura = $_POST['id_asignatura'];
    $query = "UPDATE programacion set nombre = '$nombre', id_usuario = '$id_usuario', id_curso = '$id_curso', id_periodo = '$id_periodo', id_asignatura = '$id_asignatura' WHERE id_programacion = $id_programacion";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Programacion actualizada correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: programacion.php');
  }
  
  ?>

