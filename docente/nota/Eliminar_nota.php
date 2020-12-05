<?php

include("../../bd/db.php");

if(isset($_GET['id_nota'])) {
   $id_nota =$_GET['id_nota'];
   $query = "DELETE FROM nota WHERE id_nota = $id_nota";
   $result = mysqli_query($conn, $query);
   if (!$result) {
       die ("Query Failded.");
   }

   $_SESSION['message'] = 'Nota eliminada';
   $_SESSION ['messafe_type'] = 'danger';
   
   header('Location: nota.php');

}
?>