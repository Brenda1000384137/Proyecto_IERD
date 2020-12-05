<?php
include("../../bd/db.php"); 
$id= $_POST['id_periodo'];
$query = "SELECT * FROM periodo where id_periodo ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>