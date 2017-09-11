<?php
session_start();
    require 'funciones.php';
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

        <!-- FILA 01 -->
        <div class="row">
                <!-- PELICULA 01 -->
                <?php
                    require 'vendor/autoload.php';
                    $pelicula = new Kawschool\Pelicula;
                    $resultados =  $pelicula->mostrar();
                    $cantidad = count($resultados );
                    if($cantidad > 0){
                    $c=1;
                    for($x = 0; $x < $cantidad; $x++){
                        $item =  $resultados[$x];
                ?>

                <div class="col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php print $item['titulo']  ?></h3>
                        </div>
                        <div class="panel-body">
                            <p>

                                <?php
                                $foto = 'upload/'.$item['foto'];
                                 if(file_exists($foto)){?>
                                    <img src="<?php print $foto ?>" class="img-responsive">
                                <?php }else{?>
                                    <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                                <?php } ?>
                            </p>
                            <p class="text-center">
                            <strong><?php print $item['precio']  ?> PEN</strong>
                            </p>
                        </div>
                        <div class="panel-footer">
                            <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Agregar Carrito</a>
                        </div>
                    </div>
                </div>

                <?php
                    }

                    }
                ?>
                <!-- END PELICULA 01 -->
        </div>
        <!-- END FILA 01-->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
