<?php
include("../../bd/db.php"); 
$id= $_POST['id_acudiente'];
$query = "SELECT * FROM acudiente where id_acudiente ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>