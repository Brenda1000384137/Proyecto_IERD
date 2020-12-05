<?php

include("../../bd/db.php");

/**if(isset($_POST['Guardar'])){

    $id_usuario = $_POST['id_usuario'];
    $id_acudiente = $_POST['id_acudiente'];
    $estado = $_POST['estado'];


if(isset($_POST['Guardar'])){
    $id_acudiente = $_POST['id_acudiente'];
    $id_usuario = $_POST['id_usuario'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO detalle_acudiente (id_acudiente, id_usuario, estado) VALUES ('$id_acudiente', '$id_usuario', '$estado')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Acudiente guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';

   header("Location: deta_acu.php");
}

}*/
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $acudiente = $_POST['acudiente'];
    $estado = $_POST['estado'];
   $query = [];
foreach($acudiente as $acu):
     $id = $acu['id_acu'];
     $s = "('$id', '$nombre', '$estado')";
     array_push($query,$s);
    endforeach;
// var_dump($query);
$queries = implode(",",$query);
$f = 'INSERT INTO detalle_acudiente(id_acudiente, id_usuario, estado) VALUES '.$queries;
echo $f;
$result = mysqli_query($conn, $f);
}
header("Location: deta_acu.php");

?>