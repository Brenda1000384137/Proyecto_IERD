<?php
include("../../bd/db.php"); 
$id= $_POST['id_programacion'];
$query = "SELECT * FROM programacion where id_programacion ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>