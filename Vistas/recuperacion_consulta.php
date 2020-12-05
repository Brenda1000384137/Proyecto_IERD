<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../PhpMailer/Exception.php';
require '../PhpMailer/PHPMailer.php';
require '../PhpMailer/SMTP.php';

include("../bd/db.php"); 

//Verificar el correo :3
$correo=$_POST['correo'];
$query = "SELECT * FROM usuario where correo ='{$correo}'";
$result_rols = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result_rols);

$resp='';
if(isset($row['correo'])){

                        //Aquí empieza la librería PHPMailer
                        $mail = new PHPMailer(true);
                        $mail->CharSet = 'UTF-8';
                try {
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                        )
                    );
                    //Server settings
                    $mail->SMTPDebug = 0;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'lafuentetocancipa73@gmail.com';                     // SMTP username
                    $mail->Password   = 'Lafuentetocancipa';                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom(' lafuentetocancipa73@gmail.com', 'La Fuente');
                    $mail->addAddress($correo);     // Add a recipient            // Name is optional

                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Recuperación de contraseña La Fuente Tocancipa';
                    $mail->Body    =  '<!DOCTYPE html>
                                        <html lang="en">
                                        <head>
                                            <meta charset="UTF-8">
                                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        </head>
                                        <body>
                                            <table style="border: 1px solid black;width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <td style="text-align: center;" colspan="2">
                                                            <h2><b>Usuario '.$row['nombre'].' Hemos recuperado la contraseña de su cuenta. </b></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;" >
                                                            <img src="https://i.ibb.co/xL1vSqG/sinfo.png" width="150px" class="d-inline-block align-top" alt="logo">
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <span style="font-size: 18px;"> Usuario: '.$row['n_documento'].' <br>Contraseña: '.$row['clave'].'<br><br>
                                                                <a href="http://localhost/IERD/Vistas/login.php"style="border: 1px solid; border-radius:6px; background:  #4a8ece; text-decoration: none; color:#e9e8e8; font-size:18px; padding:7px; font-weight:20px;"" >Iniciar Sesión</a><br><br>
                                                            </span>
                                                        </td>
                                                        <br><br><br>
                                                    </tr>
                                                </thead>
                                            </table>   
                                        </body>
                                        </html>';                                
                    $mail->send();
                    $resp = "<div class='alert alert-success alert-dismissible fade show'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button> Mensaje enviado.</div>";
                } catch (Exception $e) {
                    $resp = "<div align='center' class='alert alert-danger alert-dismissible fade show'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button> Error al enviar el correo{$mail->ErrorInfo} </div>";
                }
                }else{
                    $resp= "<div  align='left' class='alert alert-danger alert-dismissible fade show'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button> <p>No existe ningún usuario con ese correo,<br> intente de nuevo.</p></div>";
                }
                require 'recuperacion.php';
