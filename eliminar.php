<!DOCTYPE html>
<html>
<head>
	<title>Eliminado Registro</title>
	
</head>
<body>
	<center><h1>Eliminación de Registro de la Base de Datos</h1></center>

<br>
<br>

<?php
include("conexion.php");

$documento=$_GET['usuario'];

//sentecia donde elimino el registro
$eliminar = "DELETE FROM ingreso WHERE usuario='$usuario'";

$resultadoeliminar=mysqli_query($conectar, $eliminar);



if ($resultadoeliminar) {
	header("Location: extraerusuario.php");
}else{
	echo "<script>alert('No se pudo Eliminar'); window.history.go(-1);</script>";
}


?>





</body>
</html>