
<?php
include('./confi/conexion.php');
include('./confi/dashBoard.php');

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stiloIndex.css">
    <link rel="stylesheet" href="./css/crudVideo.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Blogo dashBoard</title>
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


  

    <div class="formulario__video">
        <form action="" method="post" enctype="multipart/form-data"> 
            <label for="">Ruta Video</label> 
            <input name="videoCrud" type="url" placeholder="Direccion URL video" aria-describedby="addon-wrapping" required>  
            <label for="">Miniatura</label>
            <input name="miniaturaVid" type="url" placeholder="Direccion URL miniatura" aria-describedby="addon-wrapping" required>
            <label for="">Tiempo Video</label>
            <input type="text" name="tiempoVid" placeholder="Duracion de el video" aria-describedby="addon-wrapping" required>
            <label for="">Titulo</label> 
            <input name="tituloVid" type="text" aria-describedby="addon-wrapping" required> 
            <label for="">Idioma</label> 
            <input name="idiomaVid" type="text" aria-describedby="addon-wrapping" required> 
            <label for="">Descripcion</label> 
            <textarea name="descripcionVid" type="" rows="4" cols="60" aria-describedby="addon-wrapping" required></textarea>
            <label for="">Etiquetas</label> 
            <textarea name="etiquetasVid" type="" rows="4" cols="60" aria-describedby="addon-wrapping" required></textarea>  
            <label for="">Categoria</label> 
            <input type="text" name="categoria" aria-describedby="addon-wrapping" required>
            <label for="">Canal</label> 
            <input type="text" name="canal" aria-describedby="addon-wrapping" required>
            <label for="">codigo Canal</label> 
            <input name="codigoCanal" type="text" aria-describedby="addon-wrapping" required> 
            
            <button type="submit" id="enbiar-notificaciones" name="enbiar-notificaciones">Subir Video</button>
        </form>  
    
    </div>


    <?php

        #MUESTRA Y BUSQUEDA DE DATOS
        
        $busc=($_POST['cajBusqueda']);
        
        $querrySelect = "SELECT * FROM video WHERE titulo LIKE '%".$busc."%' ";
        $dataCrud = mysqli_query($conn, $querrySelect)or die('Error en la consulta'); 
    
    
    ?>
    
    <div class="contenedor_crud">
        <label for="">Lista videos</label>
        <div class="busqueda">
            <form action="" method="post" enctype="multipart/form" class="form_busqueda">
                <input type="text" name="cajBusqueda" id="cajBusqueda" class="form_search">
                <button type="submit" name="btnBuscar" id="btnBuscar" class="btnbusca">Buscar</button>
            </form>

           <div class="crud">
               <table>
                   <tr>
                       <th>Video</th>
                       <th>Miniatura</th>
                       <th>Titulo</th>
                       <th>Descripcion</th>
                       <th>Idioma</th>
                       <th>Tiempo</th>
                       <th>Categoria</th>
                       <th>Canal</th>
                       <th>Codigo Canal</th>
                       <th>Fecha</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </tr>
                
                   <?php 
                        while($row=mysqli_fetch_array($dataCrud)){ ?>
                   <tr>
                       <td><video src="<?php echo $row['ruta'] ?>" alt="" style="width:80px"></td>
                       <td><img src="<?php echo $row['miniatura'] ?>" style="width:80px"></img></td>
                       <td><?php echo $row['titulo'] ?></td>
                       <td><?php echo $row['descripcion'] ?></td>
                       <td><?php echo $row['idioma'] ?></td>
                       <td><?php echo $row['tiempo'] ?></td>
                       <td><?php echo $row['categoria'] ?></td>
                       <td><?php echo $row['nombre_cana'] ?></td>
                       <td><?php echo $row['codigo_canal'] ?></td>
                       <td><?php echo $row['fecha-hora'] ?></td>
                       <td><a href=""></a></td>
                       <td>
                            <a href="./confi/delete.php?id=<?php echo $row['id_video']?>">
                                <i class='bx bxs-trash-alt' style="color: red; font-size: 30px"px></i>
                            </a>
                       </td>
                   </tr>
                   <?php } ?>
               </table>
           </div>
           
       </div>
   </div>










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
    
    

</body>
</html>