<?php
include("../../bd/db.php");

if  (isset($_POST['id_dimension'])) {
  $id_dimension = $_POST['id_dimension'];
  $query = "SELECT * FROM dimension WHERE id_dimension=$id_dimension";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_dimension = $row['id_dimension'];
    $nombre_dimension = $row['nombre_dimension'];
    
  }
}
if (isset($_POST['Actualizar'])) {
    $id_dimension = $_POST['id_dimension'];
    $nombre= $_POST['nombre'];
    
    $query = "UPDATE dimension set nombre = '$nombre' WHERE id_dimension=$id_dimension";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Dimensión actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: dimension.php');
  }  
  ?>

