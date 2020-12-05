<?php

include("../../bd/db.php");

if(isset($_GET['id_programacion'])) {
   $id_programacion =$_GET['id_programacion'];
   $query = "DELETE FROM programacion WHERE id_programacion = $id_programacion";
   $result = mysqli_query($conn, $query);
   if (!$result) {
       die ("Query Failded.");
   }

   $_SESSION['message'] = 'Programacion eliminada';
   $_SESSION ['messafe_type'] = 'danger';
   
   header('Location: programacion.php');

}
?>