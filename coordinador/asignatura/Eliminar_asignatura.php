<?php

include("../../bd/db.php");

if(isset($_GET['id_asignatura'])) {
   $id_asignatura =$_GET['id_asignatura'];
   $query = "DELETE FROM asignatura WHERE id_asignatura = $id_asignatura";
   $result = mysqli_query($conn, $query);
   if (!$result) {
       die ("Query Failded.");
   }

   $_SESSION['message'] = 'Asignatura eliminada';
   $_SESSION ['messafe_type'] = 'danger';
   
   header('Location: asignatura.php');

}
?>