<?php



#conexion registro crud
if (isset($_POST['enbiar-notificaciones'])) {
    $urlvideo = $_POST['videoCrud'];
    $urlminiatura = $_POST['miniaturaVid'];
    $tiempoVideo = $_POST['tiempoVid'];
    $tituloVideo = $_POST['tituloVid'];
    $idiomaVideo = $_POST['idiomaVid'];
    $descripcionVideo = $_POST['descripcionVid'];
    $etiquetasVideo = $_POST['etiquetasVid'];
    $categoriaVideo = $_POST['categoria'];
    $canalVideo = $_POST['canal'];
    $codigoCanalVideo = $_POST['codigoCanal'];
    header("Location: formularioVideo.php");

    #crud videos
    $querry = "INSERT INTO video (`titulo`, `descripcion`, `ruta`, `miniatura`, `tiempo`, `etiqueta`, `idioma`,`categoria`, `nombre_cana`, `codigo_canal`) 
    VALUES ('$tituloVideo','$descripcionVideo','$urlvideo','$urlminiatura','$tiempoVideo','$etiquetasVideo','$idiomaVideo','$categoriaVideo','$canalVideo','$codigoCanalVideo')";
    $resultado = mysqli_query($conn, $querry);


}






?>