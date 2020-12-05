<?php
include("../../bd/db.php"); 
$id= $_POST['id_usuario'];
$query = "SELECT * FROM usuario where id_usuario ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>