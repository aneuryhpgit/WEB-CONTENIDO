<?php 

include('./confi/conexion.php');
error_reporting(0);
/*
*/
$id = $_GET["watch?v"];

$querysql = "SELECT * FROM video WHERE id_video = '$id'";
$resul = mysqli_query($conn, $querysql);

$querrySelect = "SELECT * FROM video";
$resulta = mysqli_query($conn, $querrySelect);

include('./confi/time.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stiloIndex.css">
    <link rel="stylesheet" href="css/reproductorWatch.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Reproduccion</title>
</head>
<body>
    <header class="header">
        <div id="header__interior" class="header__interior">
            <div class="header__logo">
                <a href="index.php">
                    Blogo
                </a>
            </div>
            
            <div class="botones-enlaces">
                <div class="header__enlace-video">
                    <a href="index.php">
                        <i class='bx bxs-slideshow'></i>
                    </a>
                </div>
                
                <div class="header__enlace-video carita">
                    <a href="index.php">
                        <i class='bx bxs-shocked '></i>
                    </a>
                </div>
                
                <div class="header__enlace-video " id="lanzar__modal">
                    <a href="index.php">
                        <i class='bx bx-search-alt-2'></i>
                    </a>
                </div>
                
                <!--
                <div id="contenedor__modal" class="form__buscador contenedor__modal">
                    <div class="form__buscador-interior modal" id="modal">
                        <form id="buscador"  class="buscador" action="" method="post" enctype="multipart/form">
                            <input type="text" placeholder="Busacar" class="buscadorInput" name="buscadorInput" id="buscadorInput" autofocus>
                            <button onclick="redireccion()" type="submit" class="btn btn-primarybuscar" id="btn-primarybuscar">
                                <a href="">
                                    <i class='bx bx-search-alt-2'></i>
                                </a>
                            </button>
                        </form>
                    </div>

                    <button id="shear__cerrar" class="shear__cerrar">
                        <i class="bx bx-x"></i>
                    </button>
    
                </div>
                -->
            </div>


            <div id="header__menu" class="header__menu">
                <button id="header__cerrar" class="header__cerrar">
                    <i class="bx bx-x"></i>
                </button>
                
                
                <div class="header__lista">
                    <a href="index.php" class="btn_ref">Inicio</a>
                    <!--<a href="#" class="btn_ref">Video</a>
                    <a href="#" class="btn_ref">Shorts</a>-->
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

    <div class="contenedor-reproductor">
    
        <div class="main-video-container">
            <?php while ($data = mysqli_fetch_array($resul)) { ?>
            <div class="caja"></div>
            <div class="caja_reproductor">
                <video src="<?php echo $data['ruta'] ?>" poster="<?php echo $data['miniatura'] ?>" autobuffer="true" autoplay controls  controlslist="nodownload" class="reproductor"></video>
            </div>
            <div class="caja"></div>
            <h3 class="main-vid-title"><?php echo $data['titulo']?></h3>

            <h4 class="edad-video"><?php echo get_time_ago(strtotime($data["fecha-hora"])); ?></h4>

            <div class="btn_base_reproductor">
                <div class="botones">
                    <button class="btn_compartir face">
                        <a href="https://www.facebook.com/sharer/share.php?u=https://http://localhost/WEB-CONTENIDO/watch.php?watch?v=<?php echo $data['id_video'] ?>" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </button>
                    <button class="btn_compartir twit">
                        <a href="https://twitter.com/intent/tweet?u=https://http://localhost/WEB-CONTENIDO/watch.php?watch?v=<?php echo $data['id_video'] ?>" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </button>
                    <button class="btn_compartir what">
                        <a href="whatsapp://send?text=http://localhost/WEB-CONTENIDO/watch.php?watch?v=<?php echo $data['id_video'] ?>" target="_blank">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                    </button>
                    <button class="btn_compartir telegram">
                        <a href="https://t.me/share/url?url={//localhost/WEB-CONTENIDO/watch.php?watch?v=<?php echo $data['id_video'] ?>}&text={<?php echo $data['descripcion']?>}" target="_blank">
                            <i class='bx bxl-telegram'></i>
                        </a> 
                    </button>
                </div>
                
                <button class="btn_suscribir" id="btn_suscribir">
                    <h3>Suscribir</h3>
                    <i class='bx bxs-bell-ring'></i>
                </button>

            </div>
            
            <div class="share">
                <a href="" class="btn_compartir" ></a>
                <a href="" class="btn_compartir"></a>
                <a href="" class="btn_compartir"></a>
                <a href="" class="btn_compartir"></a>
                <a href="" class="btn_compartir"></a>
                
            </div>
            
    
            <?php } ?>
        </div>
    
        <section class="sectionR video__list-sectionR" >
                
            <div class="sud__listSectionR">
                <?php while ($data = mysqli_fetch_array($resulta)) { ?>
                <a href="watch.php?watch?v=<?php echo $data['id_video'] ?>">
                    <div class="listR lanzar-reproductor" id="lanzar-reproductor">
                        <video src="<?php echo $data['ruta'] ?>"  poster="<?php echo $data['miniatura'] ?>" class="list-videoR" ></video>
                        <div class="tiempo-videoR tiempoR">
                            <h4><?php echo $data['tiempo'] ?></h4>
                        </div>
                            
                        <h3 class="list-titleR"><?php echo $data['titulo'] ?></h3>

                        <h4 class="edad-videoRecomendado"><?php echo get_time_ago(strtotime($data["fecha-hora"])); ?></h4>
                                                      
                        <h4 class="idioma-videoR"><?php echo $data['idioma'] ?></h4>

                        
    
                        <!--<video src="<?php echo $data['ruta'] ?>" class="list-video"></video>
                        <h3 class="list-title"><?php echo $data['descripcion'] ?></h3>-->
                       
        
                    </div>
                </a>
                <?php } ?>
            </div>

            
    
        </section>

        
        
        
    </div>



    

    
    <script src="./js/menuIndex.js"></script>
    <script src="./js/video.js"></script>

    <script src="./js/notificaciones.js"></script>
    <script src="./js/desplegarReproductor.js"></script>
    
</body>
</html>