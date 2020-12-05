<?php
include("../../bd/db.php");

if  (isset($_POST['id_plan'])) {
  $id_plan = $_POST['id_plan'];
  $query = "SELECT * FROM plan_accion WHERE id_plan=$id_plan";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre_actividad = $row['nombre_actividad'];
    $fecha_inicio = $row['fecha_inicio'];
    $id_programacion = $row['id_programacion'];
    $id_dimension = $row['id_dimension'];
  }
}

if (isset($_POST['Actualizar'])) {
    $id_plan = $_POST['id_plan'];
    $nombre_actividad= $_POST['nombre_actividad'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $id_programacion = $_POST['id_programacion'];
    $id_dimension = $_POST['id_dimension'];
    $query = "UPDATE plan_accion set nombre_actividad = '$nombre_actividad', fecha_inicio = '$fecha_inicio',  id_programacion = '$id_programacion', id_dimension = '$id_dimension' WHERE id_plan=$id_plan";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Usuario Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: plan_accion.php');
  }
  ?>

