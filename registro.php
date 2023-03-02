<?php
include 'conexion.php';

$telefono=$_POST["telefono"];
$documento=$_POST["documento"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

//ingreso de datos del formulario registro a la base de datos por medio de la instruccion insert into

$insertar = "INSERT INTO registro(telefono, documento, usuario, contraseña) VALUES ('$telefono', '$documento', '$usuario', '$contraseña')";

//vericacion de usurios registrados en el sistema en relacion con la tabla ingreso de la base de datos

$verificar_usuario = mysqli_query($conectar, "SELECT * FROM registro WHERE usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
	echo "El Usuario Ya Existe en la base de datos";
	exit;
}

//ejecurtar consultas

$resultado=mysqli_query($conectar, $insertar);

if (!$resultado) {
	echo "Error al registrarse";
}
else {

	echo "Usuario resgistrado Exitosamente";
}

//cierro conexion

mysqli_close($conectar)

?>