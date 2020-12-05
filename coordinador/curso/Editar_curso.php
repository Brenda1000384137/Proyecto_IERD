<?php
include("../../bd/db.php");

if  (isset($_POST['id_curso'])) {
  $id_curso = $_POST['id_curso'];
  $query = "SELECT * FROM curso WHERE id_curso=$id_curso";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $n_curso = $row['n_curso'];
    $yeacito= $_POST['yeacito'];

  }
}

if (isset($_POST['Actualizar'])) {
    $id_curso = $_POST['id_curso'];
    $n_curso= $_POST['n_curso'];
    $yeacito= $_POST['yeacito'];
    
    $query = "UPDATE curso set n_curso = '$n_curso' , yeacito = '$yeacito' WHERE id_curso=$id_curso";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Curso Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: curso.php');
  }
  
  ?>

