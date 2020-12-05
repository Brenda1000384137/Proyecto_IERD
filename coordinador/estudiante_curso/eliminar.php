<?php

include("../../bd/db.php");

if(isset($_GET['id_acudiente'])) {
    $id_acudiente =$_GET['id_acudiente'];
    $query = "DELETE FROM acudiente WHERE id_acudiente = $id_acudiente";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die ("Query Failded.");
    }
 
    $_SESSION['message'] = 'Acudiente eliminado';
    $_SESSION ['messafe_type'] = 'danger';
    
    header('Location: index_acudiente.php');
 
 }
 ?>