<?php
include("../../bd/db.php"); 
$id= $_POST['id_curso'];
$query = "SELECT * FROM curso where id_curso ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>
