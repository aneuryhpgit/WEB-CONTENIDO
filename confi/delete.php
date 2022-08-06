<?php

include('../confi/conexion.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];
    #elimina desde tarea donde id sea sea igual a la variable $id que me estan pasando
    $query = "DELETE FROM video WHERE id_video = $id";
    $resultado = mysqli_query($conn, $query);

    if (!$resultado) {
        # code...
        die('Proceso Fallido');
    }

    #Si existe resultado redireccionar a la misma pagina 
    header('Location: ../formularioVideo.php');
}


?>