
<?php
include("../../bd/db.php");
$id_acudiente = '';
$nombrea = '';
$apellido ='';
$telefono = '';
$correo ='';
$n_documento ='';

if  (isset($_POST['id_acudiente'])) {
  $id_acudiente = $_POST['id_acudiente'];
  $query = "SELECT * FROM acudiente WHERE id_acudiente=$id_acudiente";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_acudiente = $row['id_acudiente'];
    $nombrea = $row['nombrea'];
    $apellido = $row['apellido'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $n_documento = $row['n_documento'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_acudiente = $_POST['id_acudiente'];
    $nombrea= $_POST['nombrea'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $n_documento = $_POST['n_documento'];
    $query = "UPDATE acudiente set nombrea = '$nombrea', apellido = '$apellido', telefono = '$telefono', correo = '$correo', n_documento = '$n_documento' WHERE id_acudiente=$id_acudiente";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Acudiente actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: acudiente.php');
  }
  
  ?>

  