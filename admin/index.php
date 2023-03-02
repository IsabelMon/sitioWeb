<?php include("template/cabecera.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Login
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
                
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                    
                    
                </div>  
              </div>
              
          </div>
      </div>
</html>
<?php include("template/pie.php"); ?>  