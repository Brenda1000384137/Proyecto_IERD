<?php
include("../../bd/db.php"); 
$id= $_POST['id_nota'];
$query = "SELECT * FROM nota where id_nota ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>