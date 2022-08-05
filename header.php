<?php

include('./confi/conexion.php');

error_reporting(0);

$query = "SELECT * FROM video";
$res = mysqli_query($conn, $query);

$querry = "SELECT * FROM video";
$result = mysqli_query($conn, $querry);

$busca=($_POST['buscadorInput']);

$querrySelect = "SELECT * FROM video WHERE descripcion LIKE '%".$busca."%' OR  etiqueta LIKE '%".$busca."%'  ORDER BY id_video DESC";
$resultado = mysqli_query($conn, $querrySelect)or die('Error en la consulta'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stiloIndex.css">
    <link rel="stylesheet" href="css/ventanaModalBuscador.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <title>Blogo</title>
</head>
<body>
    
    <header class="header">
        <div id="header__interior" class="header__interior">
            <div class="header__logo">
                <a href="#">
                    Blogo
                </a>
            </div>
            <div class="botones-enlaces botonesEn">
                <div class="header__enlace-video ">
                    <a href="index.php">
                        <i class='bx bxs-slideshow'></i>
                    </a>
                </div>
                
                <div class="header__enlace-video carita">
                    <a href="">
                        <i class='bx bxs-shocked'></i>
                    </a>
                </div>
                
                <div class="header__enlace-video lanzar__modal" id="lanzar__modal">
                    <a href="">
                        <i class='bx bx-search-alt-2'></i>
                    </a>
                </div>
    
                <div id="contenedor__modal" class="form__buscador contenedor__modal">
                    <div class="form__buscador-interior modal" id="modal">
                        <form id="buscador"  class="buscador" action="" method="post" enctype="multipart/form">
                            <input type="text" placeholder="Busacar" class="buscadorInput" name="buscadorInput" id="buscadorInput" autofocus>
                            <button type="submit" class="buscar">
                                <a href="./formularioVideo.php">
                                    <i class='bx bx-search-alt-2'></i>
                                </a>
                            </button>
                        </form>
                    </div>

                    <button id="shear__cerrar" class="shear__cerrar">
                        <i class="bx bx-x"></i>
                    </button>
    
                </div>

            </div>
            


            <div id="header__menu" class="header__menu">
                <button id="header__cerrar" class="header__cerrar">
                    <i class="bx bx-x"></i>
                </button>
                
                
                <div class="header__lista">
                    <a href="index.php" id="btn_ref">Inicio</a>
                    <a href="#" class="btn_ref">Video</a>
                    <a href="#" class="btn_ref">Shorts</a>
                    <a href="#" class="btn_ref">Nosotros</a>
                    <a href="#" class="btn_ref">Politica de privacidad</a>
                    <a href="#" class="btn_ref">Contacto</a>
                </div>
            </div>
            <div class="header__btn">
                <button id="header__btn-accion" class="header__btn-accion">
                    <i class="bx bx-menu"></i>
                </button>
                
    
            </div>

        </div> 
    </header>