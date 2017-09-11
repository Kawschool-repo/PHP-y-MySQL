<?php
    session_start();

    
    
    require 'funciones.php';
    require 'vendor/autoload.php';
    $pelicula = new Kawschool\Pelicula;
  
   if($_SERVER['REQUEST_METHOD']==='GET'){
     
      if(isset($_GET['id'])){
          $id = $_GET['id'];
          $resultado = $pelicula->mostrarPorId($id);

          $indice = md5($id);

          if(isset($_SESSION['carrito']))
            if(array_key_exists($indice,$_SESSION['carrito']))
              agregarProducto($resultado,$indice,5);
            else
              agregarProducto($resultado,$indice);
          else
            agregarProducto($resultado,$indice);
      }

      
   }
  
 
?>
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
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadPeliculas() ?></span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Pelicula</th>
                    <th>Foto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- FILA -->
                  <?php

                  if(isset($_SESSION['carrito'])){
                 
                    foreach($_SESSION['carrito'] as $indice => $value){
                      $total = $value['precio'] * $value['cantidad'];
                  ?>
                  
                      <tr>
                        <form action="actualizar_carrito.php" method="post">    
                            <td><?php print $value['titulo'] ?></td>
                            <td>
                                <?php
                                  $foto = 'upload/'.$value['foto'];
                                    if(file_exists($foto)){?>
                                      <img src="<?php print $foto ?>" width="35">
                                  <?php }else{?>
                                      <img src="assets/imagenes/not-found.jpg" width="35">
                                  <?php } ?>
                            </td>
                            <td>
                              <?php print $value['precio'] ?> PEN
                            </td>
                            <td>
                              <input type="hidden" name="id"  value="<?php print $value['id'] ?>">
                              <input type="text" name="cantidad" class="form-control u-size-100" value="<?php print $value['cantidad'] ?>">
                            </td>
                            <td>
                              <?php print  $total ?> PEN
                            </td>
                            <td>
                              <button type="submit" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                              <a class="btn btn-danger btn-xs" href="eliminar_carrito.php?id=<?php print $value['id']  ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </form>
                      </tr>
                   
                  <!-- END FILA -->           
                  <?php

                    }

                    }
                  ?>

                </tbody>
                <tfoot>
                  <tr>
                      <td colspan="4"></td>
                      <td>Total: <?php print calcularTotal(); ?> PEN</td>
                      <td></td>
                  </tr>

                </tfoot>
              </table>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="pull-left">
              <a href="index.php" class="btn btn-info">Seguir Comprando</a>
            </div>
            <?php
             if(isset($_SESSION['carrito'])){
            ?>
            <div class="pull-right">
              <a href="finalizar.php" class="btn btn-success">Finalizar Compra</a>
            </div>
            <?php
             }
            ?>
          </div>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
