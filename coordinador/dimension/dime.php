<?php
include("../../bd/db.php"); 
$id= $_POST['id_dimension'];
$query = "SELECT * FROM dimension where id_dimension ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>