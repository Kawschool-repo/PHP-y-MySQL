
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kawschool Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Kawschool Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="" class="btn">NOSOTROS</a>
            </li> 
            <li>
              <a href="" class="btn">PRODUCTOS</a>
            </li>
            <li>
              <a href="" class="btn">CONTACTENOS</a>
            </li>
            <li>
              <a href="carrito.php">CARRITO <span class="badge">5</span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
        <div class="main-form">
          
          <form action="completar_pedido.php" method="POST" role="form">
            <legend>COMPLETAR DATOS</legend>
          
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Nombres" required="required">
            </div>
            <div class="form-group">
              <label>Apellidos</label>
              <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="required">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <label>Teléfono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required="required">
            </div>
            <div class="form-group">
              <label>Comentario</label>
              <textarea class="form-control" rows="3" name="comentario" placeholder="Comentario" required="required"></textarea>
            </div>

          
            
          
            <button type="submit" class="btn btn-primary btn-block">ENVIAR</button>
          </form>
        </div>


        
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
