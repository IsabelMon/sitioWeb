<?php
include("conexion.php");
?>

<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//variable consulta para obtener los registros de la tabla ingreso
$consulta="SELECT * FROM registro WHERE usuario='$usuario' and contraseña='$contraseña'";

//se conecta y ejecuta la consulta
$resultado=mysqli_query($conectar, $consulta);

//recoremos los registro de la tabla
$fila=mysqli_num_rows($resultado);

//le pregunto a la table ingreso si hay registro por medio del condicional IF
if ($fila>0) {
	header("location:menu.php");

}

else {
	echo "El usuario que ingreso no existe ";
}

//Esta funcion libera los resultados que estan almacenados en la variable resultado por estan en memoria
mysqli_free_result($resultado);

// cierro la conexion
mysqli_close($conectar);

?>