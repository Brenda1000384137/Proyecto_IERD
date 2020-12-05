<?php
session_start();
    //Se agrega la conexión y la consulta
require('../../bd/db.php');

    /*$query = "SELECT * FROM usuario where clave ='$clave'";
    $row= mysqli_query($conn, $query);

    $resp= mysqli_fetch_assoc($row);*/
    if($_POST['action'] == 'changePassword'){
                        
        if(!empty($_POST['passActual']) && !empty($_POST['passNuevo']))
        {
            $clave = md5($_POST['passActual']);
            $newPass = md5($_POST['passNuevo']);
            $id_usuario = $_SESSION['id_usuario'];

            $code ='';
            $msg  ='';
            $arrData = array();

            $query_user = mysqli_query($conn, "SELECT * FROM usuario
                                               WHERE clave = '$clave' and id_usuario = $id_usuario");
            $result = mysqli_num_rows($query_user);
            if($result > 0)
            {
                $query_update = mysqli_query($conn, "UPDATE usuario SET clave = '$newPass' WHERE id_usuario = $id_usuario");
                mysqli_close($conn);

                if($query_update){
                    $code = '00';
                    $msg = "Su contraseña se ha actualizado con éxito."; 
                }else{
                    $code = '2';
                    $msg = "No es posible cambiar su contraseña";
                }
            }else{
                $code = '1';
                $msg = "La contraseña actual es incorrecta.";
            }
            $arrData = array('cod' => $code, 'msg' => $msg);
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        }else{ 
            echo "error";
        }
        exit;
    }
?>