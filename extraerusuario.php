
<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina de operaciones</title>
</head>
<body>

<h1>Usuarios Registrados</h1>

<br>

<table border="1" >
	
	<tr>
		
		<td>usuario</td>
		<td>telefono</td>
		<td>documento</td>
		<td>contraseña</td>
		<td>Acciones con los Registros</td>
	</tr>

	<?php

	$sql="SELECT * from registro";

	$resultado=mysqli_query($conectar, $sql);

	while ($mostrar=mysqli_fetch_array($resultado)) {
	
	?>

	<tr>
		
		<td><?php echo $mostrar['usuario'] ?></td>
		<td><?php echo $mostrar['telefono'] ?></td>
		<td><?php echo $mostrar['documento'] ?></td>
		<td><?php echo $mostrar['contraseña'] ?></td>

		<td>
			
			<a href="editar.php?usuario=<?php echo $mostrar["usuario"] ?>">Editar</a> ||
			
            <a href="eliminar.php?documento=<?php echo $mostrar["documento"]; ?>" class="table">eliminar</a>

		</td>


	</tr>
	<?php

	}

// cierro la conexion
mysqli_close($conectar);

	?>

</table>
<br>

<a align="left" href="cabecera.php"><input type="button" value="Clic para Volver al Menú Principal"></a>

</body>
</html>