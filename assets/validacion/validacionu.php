<?php
    //Se agrega la conexión y la consulta
    require('../../bd/db.php');

    $n_documento = $_POST['n_documento'];
    $query = "SELECT * FROM usuario where n_documento ='$n_documento'";
    $row= mysqli_query($conn, $query);

    $resp= mysqli_fetch_assoc($row);
    if(isset($resp['n_documento'] )){

        echo json_encode(false);
    }else{
        echo json_encode(true); 
    }
?>