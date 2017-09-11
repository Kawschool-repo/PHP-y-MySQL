<?php
session_start();

 
 if(empty($_SESSION['usuario']) )
        header('Location:../index.php');

 
 
     require '../../vendor/autoload.php';
    $pelicula = new Kawschool\Pelicula;

    $id = $_GET['id'];

    $resultado = $pelicula->mostrarPorId($id);


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
              <li><a href="peliculas/index.php" class="btn">Peliculas</a></li>
              
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
                    <fieldset>
                        <legend>Actualizar Datos de la Pelicula</legend>
                        <form action="../acciones.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id" value="<?php print $resultado['id'] ?>" >
                            <div class="form-group">
                                <label>Titulo</label>
                                <input type="text" class="form-control" name="titulo" value="<?php print $resultado['titulo'] ?>" required >
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" name="descripcion" rows="3" required><?php print $resultado['descripcion'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Paises</label>
                                <select class="form-control" name="pais_id" required>
                                     <option value="">--SELECIONE--</option>
                                   <?php
                                       
                                        $pais = new Kawschool\Pais;
                                        $resultados = $pais->mostrar();
                                        $cantidad = count($resultados);
                                        for($x = 0; $x <$cantidad; $x++){
                                            $item = $resultados[$x];
                                    ?>
                                         <option value="<?php print $item['id']  ?>"  <?php print $resultado['pais_id'] == $item['id'] ? 'selected':'' ?>  ><?php print $item['nombre']  ?></option>

                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto">
                                <input type="hidden" name="foto_temp" value="<?php print $resultado['foto'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control" name="precio" value="<?php print $resultado['precio'] ?>"  >
                            </div>

                            <input type="submit" name="accion"   class="btn btn-success" value="Actualizar">
                            <a href="index.php" class="btn btn-default">Cancelar</a>
                        </form>
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
