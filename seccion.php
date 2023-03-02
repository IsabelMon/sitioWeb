<?php include("template/cabecera.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <link  rel= " stylesheet "  href = "css/bootstrap.css" >
  <link  rel= " stylesheet "  href = "css/1prueba.css" >
  
</head>

<body >

    <form action="validar.php" method="POST">
 	
 	
     <div class="container">
          <div class="row">
              <div class="col-md-10">
                <div class="card">
				<h1>   Inicio de Sesión</h1>
                    <div class="card-header">
					
                    </div>
                    
                    <form>
                    <div class = "form-group">
                    <label for="exampleInputEmail1">usuario</label>
                    <input type="text" class="form-control" name="usuario"  placeholder="Escribe tu usuario">
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">contraseña</label>
                    <input type="password" class="form-control"  placeholder="Escribe tu contraseña">
                    </div>
                
                    <button type="submit" class="btn btn-danger">Entrar</button>
                    </form>
                    <p>Al resgistrarte, aceptas nuestras condiciones de uso y politicas de privacidad.</p>
                    <p>¿No tienes una cuenta?<a class="link" href="registrousuario.php">Registrate</a></p>
                    
                </div>  
              </div>
              
          </div>
      </div>
	
</body>
</html>