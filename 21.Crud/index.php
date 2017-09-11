<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <hr>
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
                                    <th>Foto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                <tr>
                                    <td><?php print $c; ?></td>
                                    <td><?php print $item['titulo']; ?></td>
                                    <td><?php print $item['nombre']; ?></td>
                                    <td>
                                        <?php
                                            $foto = './upload/'.$item['foto'];
                                            if(is_file( $foto)){
                                        ?>
                                            <img src="<?php print $foto; ?>" width="50" >
                                        <?php }else{?>
                                            SIN FOTO
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="acciones.php?id=<?php print $item['id']; ?>" class="btn btn-danger btn-sm" >Eliminar</a>
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


           
      </div> 
    </body>
</html>

