
<?php

include("../../bd/db.php"); 
$id= $_POST['id_rol'];
$query = "SELECT * FROM rol where id_rol ={$id}";

$row= mysqli_query($conn, $query);
echo json_encode(mysqli_fetch_array($row) );
?>