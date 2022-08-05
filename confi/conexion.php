<?php
/*
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "live";

$connect = mysqli_connect($host, $dbuser, $dbpwd);
if(!$connect)
    echo ("No se ha conectado a la base de datos");
else
    $select = mysqli_select_db($db);

*/

#guardar datos en seccion
//session_start();
#coneccion a la base de datos
$conn=mysqli_connect(
    'localhost',
    'root',
    '',
    'live'
);

if (!$conn) {
    die("No hay conexion: ".mysqli_connect_error());
    # code...
}


?>