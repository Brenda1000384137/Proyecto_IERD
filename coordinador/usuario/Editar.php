<?php
include("../../bd/db.php");

if  (isset($_POST['id_usuario'])) {
  $id_usuario = $_POST['id_usuario'];
  $query = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    
    $celular = $row['celular'];
    $id_tipo = $row['id_tipo'];
    $n_documento = $row['n_documento'];
    $id_rol = $row['id_rol'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_usuario = $_POST['id_usuario'];
    $nombre= $_POST['nombre'];
    $apellido = $_POST['apellido'];
    
    $celular = $_POST['celular'];
    $id_tipo = $_POST['id_tipo'];
    $n_documento = $_POST['n_documento'];
    $id_rol = $_POST['id_rol'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $query = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', celular = '$celular', 
    id_tipo = '$id_tipo', n_documento = '$n_documento', id_rol = '$id_rol', correo = '$correo', direccion = '$direccion' WHERE id_usuario=$id_usuario";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Usuario Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: usuario.php');
  }
  ?>

