<?php
include("../../bd/db.php");


if(isset($_POST['n_curso'])){
    $n_curso = $_POST['n_curso'];
    $estado = $_POST['estado'];
    $estudiante = $_POST['estudiante'];
   $query = [];
foreach($estudiante as $estu):
     $id = $estu['id_estudiante'];
     $s = "('$id', '$n_curso', '$estado')";
     array_push($query,$s);
    endforeach;
// var_dump($query);
$queries = implode(",",$query);
$f = 'INSERT INTO detalle_curso(id_usuario, id_curso, estado) VALUES '.$queries;
$result = mysqli_query($conn, $f);
echo true;
}
?>