<?php
include("../../bd/db.php");

if  (isset($_POST['id_nota'])) {
  $id_nota = $_POST['id_nota'];
  $query = "SELECT * FROM nota WHERE id_nota=$id_nota";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nota= $_POST['nota'];
    $id_plan = $_POST['id_plan'];
    $id_detalle = $_POST['id_detalle'];
    $id_asignatura = $_POST['id_asignatura'];
  }
}
if (isset($_POST['Actualizar'])) {
    $id_nota = $_POST['id_nota'];
    $nota= $_POST['nota'];
    $id_plan = $_POST['id_plan'];
    $id_detalle = $_POST['id_detalle'];
    $id_asignatura = $_POST['id_asignatura'];
    $query = "UPDATE nota set nota = '$nota', id_plan = '$id_plan' , id_detalle = '$id_detalle', id_asignatura = '$id_asignatura' WHERE id_nota=$id_nota";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Nota Actualizada correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: nota.php');
  }
  
  ?>

  
 