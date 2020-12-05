<?php
include("../../bd/db.php");

/* 
if  (isset($_POST['id_detalle'])) {
  $id_detalle = $_POST['id_detalle'];
  $query = "SELECT * FROM detalle_acudiente WHERE id_detalle = $id_detalle";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_acudiente = $row['id_acudiente'];
    $id_usuario = $row['id_usuario'];
    $estado = $row['estado'];
    $year = $row['year'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_detalle = $_POST['id_detalle'];
    $id_acudiente= $_POST['id_acudiente'];
    $id_usuario = $_POST['id_usuario'];
    $estado = $_POST['estado'];
    $year = $_POST['year'];
    $query = "UPDATE detalle_curso set id_curso = '$id_curso', id_usuario = '$id_usuario', estado = '$estado', year = '$year' WHERE id_detalle = $id_detalle";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Curso Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: estu.php');
  }*/

  if(isset($_POST['n_curso'])){
    $n_curso = $_POST['n_curso'];
    $estado = $_POST['estado'];
    $estudiante = $_POST['estudiante'];
    $year = $_POST['year'];
   $query = [];
foreach($estudiante as $estu):
     $id = $estu['id_estudiante'];
     $s = "('$id', '$n_curso', '$estado', '$year')";
     array_push($query,$s);
    endforeach;
// var_dump($query);
$queries = implode(",",$query);
$f = 'UPDATE INTO detalle_curso(id_usuario, id_curso, estado, year) VALUES '.$queries;
echo $f;
$result = mysqli_query($conn, $f);
}
  ?>