<?php
include("../../bd/db.php"); 
$id= $_POST['id_asignatura'];
$query = "SELECT * FROM asignatura where id_asignatura ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>