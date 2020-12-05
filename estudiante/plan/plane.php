<?php
include("../../bd/db.php"); 
$id= $_POST['id_plan'];
$query = "SELECT * FROM plan_accion where id_plan ={$id}";
$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>