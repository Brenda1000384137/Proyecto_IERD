<?php
include("../../bd/db.php"); 
$id= $_POST['id_detalle'];
$query = "SELECT * FROM detalle_curso where id_detalle = {$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>