
<?php
include("../../bd/db.php");

if  (isset($_POST['id_periodo'])) {
  $id_periodo = $_POST['id_periodo'];
  $query = "SELECT * FROM periodo WHERE id_periodo=$id_periodo";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $fecha_inicio = $row['fecha_inicio'];
    $fecha_cierre = $row['fecha_cierre']; 
    $fecha_entrega_notas = $row['fecha_entrega_notas'];
  }
}
if (isset($_POST['Actualizar'])) {
    $id_periodo = $_POST['id_periodo'];
    $nombre = $_POST['nombre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_cierre = $_POST['fecha_cierre'];
    $fecha_entrega_notas = $_POST['fecha_entrega_notas'];
   
    $query = "UPDATE periodo set nombre = '$nombre', fecha_inicio = '$fecha_inicio', fecha_cierre = '$fecha_cierre', fecha_entrega_notas = '$fecha_entrega_notas' WHERE id_periodo=$id_periodo";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Periodo Actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: periodo.php');
  }
  ?>
