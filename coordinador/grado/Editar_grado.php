<?php
include("../../bd/db.php");


if  (isset($_POST['id_grado'])) {
  $id_grado = $_POST['id_grado'];
  $query = "SELECT * FROM grado WHERE id_grado=$id_grado";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];

  }
}

if (isset($_POST['Actualizar'])) {
    $id_grado = $_POST['id_grado'];
    $nombre= $_POST['nombre'];
    $query = "UPDATE grado set nombre = '$nombre' WHERE id_grado=$id_grado";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Grado Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: grado.php');
  }
  
  ?>
 
 