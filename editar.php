<?php
include("conexion.php");

$usuario=$_GET['usuario'];

$sql="SELECT * FROM registro WHERE usuario = '$usuario'";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina de operaciones</title>
</head>
<body>

<h1>Usuarios Registrados</h1>

<br>


<form action="registro.php" method="POST">
	
	<?php

	$resultado=mysqli_query($conectar, $sql);

	while ($mostrar=mysqli_fetch_array($resultado)) {
	
	?>
		<tr>
		<label>usuario</label>
		<td><input type="number" value="<?php echo $mostrar["usuario"]; ?>" name="usuario"></td>
		<label>telefono</label>
		<td><input type="text" value="<?php echo $mostrar["telefono"]; ?>" name="telefono"></td>
		<label>documento</label>
		<td><input type="text" value="<?php echo $mostrar['documento']; ?>" name="documento"></td>
		<label>Contraseña</label>
		<td><input type="text" value="<?php echo $mostrar['contraseña']; ?>" name="contraseña"></td>
		<br>
		<br>
		<h3>Actualización de Registro DATABASE</h3>
		<input type="submit" value="registro">
		
		</tr>	
	
	<?php

	}



// cierro la conexion
mysqli_close($conectar);

	?>

</form>
<br>
<br>

<a align="left" href="cabecera.php"><input type="button" value="Clic para Volver al Menú Principal"></a>

</body>
</html>
