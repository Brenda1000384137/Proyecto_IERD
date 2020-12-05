<?php

include("../../bd/db.php");

if(isset($_GET['id_plan'])) {
   $id_plan =$_GET['id_plan'];
   $query = "DELETE FROM plan_accion WHERE id_plan = $id_plan";
   $result = mysqli_query($conn, $query);
   if (!$result) {
       die ("Query Failded.");
   }

   $_SESSION['message'] = 'Plan de accíon eliminado';
   $_SESSION ['messafe_type'] = 'danger';
   
   header('Location: plan_accion.php');

}
?>