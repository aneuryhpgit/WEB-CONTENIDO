<?php

include('./confi/conexion.php');

error_reporting(0);

$querry = "SELECT * FROM video";
$resu = mysqli_query($conn, $querry);

$querry = "SELECT * FROM video";
$result = mysqli_query($conn, $querry);

$busca=($_POST['buscadorInput']);

$querrySelect = "SELECT * FROM video WHERE titulo LIKE '%".$busca."%' OR descripcion LIKE '%".$busca."%' OR  etiqueta LIKE '%".$busca."%'  ORDER BY id_video DESC";
$resultado = mysqli_query($conn, $querrySelect)or die('Error en la consulta'); 

include('./confi/time.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stiloIndex.css">
    <link rel="stylesheet" href="css/ventanaModalBuscador.css">
    <link rel="stylesheet" href="css/modalReproductor.css">
    <link rel="stylesheet" href="css/reproductor.css">
    <link rel="stylesheet" href="css/avisoDecokies.css">
    <link rel="stylesheet" href="css/footer.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
                                <a href="index.php">
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
                    <!--<a href="#" class="btn_ref">Video</a>
                    <a href="#" class="btn_ref">Shorts</a>-->
                    <a href="nosotros.php" class="btn_ref">Nosotros</a>
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

   <!--
    <div class="contenido__principal">
        <div class="sub__contenido">
            <?php while ($dat = mysqli_fetch_array($result)) { ?>
            <div class="contenido__principal-interior">
                <video style="width: 100%; height: auto;" src="<?php echo $dat['ruta'] ?>"></video>
            </div>
            <?php } ?>
        </div>
    </div>
    -->

    <main class="contenedor__segundo">
        
        <section class="section video__list-section">
            
            <div class="sud__listSection">
                <?php while ($data = mysqli_fetch_array($resultado)) { ?>
                <div class="listSection__interior">
                    <a href="watch.php?watch?v=<?php echo $data['id_video'] ?>" style="text-decoration: none;">
                    <div class="list">
                        
                        <h4 class="tiempo-video"><?php echo $data['tiempo'] ?></h4>
                            
                        <video src="<?php echo $data['ruta'] ?>" poster="<?php echo $data['miniatura'] ?>"  class="list-video" id="list-video" ></video>
                        
                        <h3 class="list-title"><?php echo $data['titulo'] ?></h3>
                        <?php

                        
                        ?>
                        <h4 class="edad-video"><?php echo get_time_ago(strtotime($data["fecha-hora"])); ?></h4>
                                          
                        <h4 class="idioma-video"><?php echo $data['idioma'] ?></h4>

                        

                        
                    </div>
                    </a>

                </div>
                
                <?php } ?>
            </div>

        </section>



        
    </main>


    <?php

    #$id = $_GET["watch?v"];
    
    #$querysql = "SELECT * FROM video WHERE id_video = '$id'";
    #$res = mysqli_query($conn, $querysql);


    ?>

    


   <!--
    <section class="contenedor-de-reproduccion" id="contenedor-de-reproduccion" data-backdrop="static" data-keyboard="false">  
    <div class="main-video-container">
            <?php while ($data = mysqli_fetch_array($res)) { ?>
            <div class="caja"></div>
            <div class="caja_reproductor">
                <video src="" autoplay controls  controlslist="nodownload" class="reproductor main-video">
                    <source src="<?php echo $data['ruta']?>" type="mp4">
            
                </video>
            </div>
            <div class="caja"></div>
            <h3 class="main-vid-title"><?php echo $data['descripcion']?></h3>

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

       
        <section class="sectionR video__list-sectionR" data-backdrop="static" data-keyboard="false">
                
            <div class="sud__listSectionR">
                <?php while ($data = mysqli_fetch_array($resu)) { ?>
                <a href="?watch?v=<?php echo $data['id_video'] ?>" data-backdrop="static" data-keyboard="false" class="etiqueta">
                    <div class="listR lanzar-reproductor" id="lanzar-reproductor">
                        <h4 class="tiempo-videoR tiempoR"><?php echo $data['tiempo'] ?></h4>
                                    
                         <video src="<?php echo $data['ruta'] ?>" class="list-videoR" ></video>
                                    
                        <h3 class="list-titleR"><?php echo $data['descripcion'] ?></h3>
                                                      
                        <h4 class="idioma-videoR"><?php echo $data['idioma'] ?></h4>
    

                       
        
                    </div>
                </a>
                <?php } ?>
            </div>

    
        </section>

        

    </section>
     -->

     <!--AVISO DE COOKIES-->
    <div class="aviso-cookies" id="aviso-cookies">
        <h3 class="tituloCookies">Aviso de cookies</h3>
        <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios</p>
        <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
        <a href="./cookies.php" class="enlace">Aviso de cookies</a>
    </div>
    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>


    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="./img/logoBlogo.png" alt="">
                </div>
                <div class="terms">
                    <p>Disfruta de contenido audiovisual de calidad de diferentes tematicas entretenimiento, salud, belleza, historia, ciencia, tecnologia, cortes de peliculas y series, y mucho mas en blogo </p>
                </div>
            </div>
        
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Politicas de privacidad</a>
                <a href="#">Servicios</a>              
            </div>
        
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        
        </div>
      
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>Blogo</b></p>
        </div>
    </footer>


    <script src="./js/video.js"></script>
    <script src="./js/menuIndex.js"></script>
    <script src="./js/contenedorModalBuscador.js"></script>
    <script src="./js/desplegarReproductor.js"></script>
    <script src="./js/avisoCokies.js"></script>
</body>
</html>