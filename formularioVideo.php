

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
        Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">  
        <br><br> Nombre: <input name="nombre" type="text" size="70" maxlength="70"> 
        <br><br> Descripcion: <input name="description" type="text" size="100" maxlength="250"> 
        <br><br> 
        <input name="submit" type="submit" value="SUBIR ARCHIVO">   
    </form>  

    <button id="enbiar-notificaciones">eviar notificacion</button>
    

    <script src="./js/notificaciones.js"></script>
</body>
</html>