<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <link  rel= " stylesheet "  href = "css/bootstrap.css" >
  <link  rel= " stylesheet "  href = "css/prueba.css" >
</head>
<body background-color="Silver">
 
 <form action="registro.php" method="POST">
 
 
 	<h1>Registrate</h1>

	<div class="contenedor">
 		

		<label>Ingrese su nombre de usuario </label>
 		<input type="text" placeholder="Nombre de Usuario" name="usuario" required="Obligatorio">
 		

 		<label>Ingrese su telefono</label>
 		<input type="number" placeholder="Numero de telefono" name="telefono" required="Obligatorio">
 		</div>
    

 		<label>Ingrese su numero de documento</label>
 		<input type="text" placeholder="Numero de documento" name="documento" required="Obligatorio">
 		</div>

 		<label>Ingrese su clave</label>
 		<input type="password" placeholder="Contraseña" name="contraseña" required="Obligatorio">
 		</div>

 		<input type="submit" value="Registrate" class="button">

 		<p>Al registrarte, aceptas nuestras condiciones de uso y politicas de privacidad.</p>
 		<p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
	</div>

</form>


</body>
</html>