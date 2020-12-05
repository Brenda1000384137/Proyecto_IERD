<?php
include("../../bd/db.php");

if  (isset($_POST['id_asignatura'])) {
  $id_asignatura = $_POST['id_asignatura'];
  $query = "SELECT * FROM asignatura WHERE id_asignatura=$id_asignatura";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $id_grado = $row['id_grado'];
    $id_usuariod = $row['id_usuariod'];

  }
}

if (isset($_POST['Actualizar'])) {
    $id_asignatura = $_POST['id_asignatura'];
    $nombre= $_POST['nombre'];
    $id_grado= $_POST['id_grado'];
    $id_usuariod = $row['id_usuariod'];
    $query = "UPDATE asignatura set nombre = '$nombre', id_grado = '$id_grado' , id_usuariod = '$id_usuariod' WHERE id_asignatura=$id_asignatura";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'asignatura Actualizada correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: asignatura.php');
  }
  ?>

