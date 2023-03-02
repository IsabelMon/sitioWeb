<?php
//variables para la conexion 
$user="root";
$pass="";
$server="localhost";
$db="instant food";
//conectar al servidor
$conectar=mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($conectar,"utf8");

?>
