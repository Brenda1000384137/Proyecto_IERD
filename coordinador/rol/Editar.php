<?php
include("../../bd/db.php");

$nombre = '';
$estado= '';

if  (isset($_POST['id_rol'])) {
  $id_rol = $_POST['id_rol'];
  $query = "SELECT * FROM rol WHERE id_rol=$id_rol";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_rol = $_POST['id_rol'];
    $nombre= $_POST['nombre'];
    

    $query = "UPDATE rol set nombre = '$nombre' WHERE id_rol=$id_rol";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Rol Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: rol.php');
  }
  
  ?>
  