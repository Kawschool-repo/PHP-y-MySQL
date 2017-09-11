<?php
session_start();

 
if(empty($_SESSION['usuario']) )

  header('Location:index.php');

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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
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
              <li class="active"><a href="" class="btn">Pedidos</a></li>
              <li><a href="peliculas/index.php" class="btn">Peliculas</a></li>


              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['usuario']['nombre_usuario'] ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                  
                    <li class="dropdown-header">
                    <a href="cerrar_sesion.php" class="btn">Cerrar Sesión</a>
                    </li>
                    
                  </ul>
                </li>
              
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
      <div class="row">
        <div class="col-md-12">
          <h3>ULTIMOS PEDIDOS REALIZADOS</h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-hover">
            <thead>
              
              <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>N° Pedido</th>
                <th>Total</th>
                <th>fecha</th>
                
              </tr>
            </thead>
            <tbody>

            <?php 
                require '../vendor/autoload.php';
                $pedido = new Kawschool\Pedido;
                $resultados =  $pedido->mostrar();
                $c=1;
                foreach($resultados as $indice => $value){
            ?>
                          <!-- FILA -->
              <tr>
                <td><?php print $c ?></td>
                <td>
                  <?php print $value['nombre'].' '.$value['apellidos'] ?>
                  <br> <?php print $value['email']?>
                </td>
                <td><?php print $value['id'] ?></td>
                <td><?php print $value['total']?></td>
               <td><?php print $value['fecha']?></td>
              </tr>
              <!-- END FILA -->   
                <?php
                  $c++;
                 }?>       
            </tbody>
          </table>
        </div>
          
            

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>
