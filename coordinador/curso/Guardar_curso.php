<?php
 include("../../bd/db.php");
if(isset($_POST['Guardar'])){
    $n_curso = $_POST['n_curso'];
    $yeacito= $_POST['yeacito'];
    $query = "INSERT INTO curso (n_curso , yeacito) VALUES ('$n_curso' ,'$yeacito')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Curso guardado satisfactoriamente¡';
    $SESSION['message_type'] = 'primary';
   header("Location: curso.php");
}

?>
