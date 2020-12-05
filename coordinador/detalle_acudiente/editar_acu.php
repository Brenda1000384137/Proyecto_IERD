<?php
include("../../bd/db.php");

if  (isset($_POST['id_detalle'])) {
  $id_detalle = $_POST['id_detalle'];
  $query = "SELECT * FROM detalle_acudiente WHERE id_detalle = $id_detalle";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_acudiente = $row['id_acudiente'];
    $id_usuario = $row['id_usuario'];
    $estado = $row['estado'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_detalle = $_POST['id_detalle'];
    $id_acudiente= $_POST['id_acudiente'];
    $id_usuario = $_POST['id_usuario'];
    $estado = $_POST['estado'];
    $query = "UPDATE detalle_acudiente set id_acudiente = '$id_acudiente', id_usuario = '$id_usuario', estado = '$estado' WHERE id_detalle = $id_detalle";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Curso Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: deta_acu.php');
  }
  
  ?>

  