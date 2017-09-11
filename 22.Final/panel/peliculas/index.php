<?php
session_start();

    if(empty($_SESSION['usuario']) )
        header('Location:../index.php');
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
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
          <a class="navbar-brand" href="../dashboard.php">Kawschool Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="" class="btn">Pedidos</a></li>
              <li><a href="" class="btn">Peliculas</a></li>

              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['usuario']['nombre_usuario'] ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                  
                    <li class="dropdown-header">
                    <a href="../cerrar_sesion.php" class="btn">Cerrar Sesión</a>
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
                    <div class="pull-right">
                        <a href="form_registrar.php" class="btn btn-primary">Nuevo</a>
                    </div>  
                </div>
        </div>
         <div class="row">
                <div class="col-md-12">
                     <fieldset>
                        <legend>Listado de Peliculas</legend>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titulo</th>
                                    <th>Pais</th>
                                    <th>Precio</th>
                                    <th>Foto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require '../../vendor/autoload.php';
                                    $pelicula = new Kawschool\Pelicula;
                                    $resultados =  $pelicula->mostrar();
                                    $cantidad = count($resultados );
                                    if($cantidad > 0){
                                    $c=1;
                                    for($x = 0; $x < $cantidad; $x++){
                                        $item =  $resultados[$x];
                                ?>
                                <tr>
                                    <td><?php print $c; ?></td>
                                    <td><?php print $item['titulo']; ?></td>
                                    <td><?php print $item['nombre']; ?></td>
                                    <td><?php print $item['precio']; ?></td>

                                    <td>
                                        <?php
                                            $foto =  '../../upload/'.$item['foto'];
                                            if(is_file( $foto)){
                                        ?>
                                            <img src="<?php print $foto; ?>" width="50" >
                                        <?php }else{?>
                                            SIN FOTO
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="../acciones.php?id=<?php print $item['id']; ?>" class="btn btn-danger btn-sm" >Eliminar</a>
                                        <a href="form_actualizar.php?id=<?php print $item['id']; ?>" class="btn btn-success btn-sm" >Actualizar</a>
                                    </td>
                                </tr>
                                <?php
                                    $c++;
                                    }
                                }else{
                                ?>
                                <tr>
                                    <td colspan="5" class="text-center">NO HA REGISTROS EN LA TABLA PELICULAS</td>

                                </tr>

                                <?php } ?>
                                
                            </tbody>
                        </table>
                    </fieldset>  
                </div>
            </div>




        
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>
