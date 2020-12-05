<?php
include("../../bd/db.php"); 
$id= $_POST['id_grado'];
$query = "SELECT * FROM grado where id_grado ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>