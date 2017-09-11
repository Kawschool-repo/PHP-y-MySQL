<?php
     require 'vendor/autoload.php';
    $pelicula = new Kawschool\Pelicula;

    $id = $_GET['id'];

    $resultado = $pelicula->mostrarPorId($id);


?>
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
                    <fieldset>
                        <legend>Actualizar Datos de la Pelicula</legend>
                        <form action="acciones.php" method="post" enctype="multipart/form-data">
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

                                <input type="hidden" class="form-control" name="foto_temp" value="<?php print $resultado['foto']  ?>">

                                


                            </div>
                            <input type="submit" name="accion"   class="btn btn-success" value="Actualizar">
                            <a href="index.php" class="btn btn-default">Cancelar</a>
                        </form>
                    </fieldset>
              </div>
            </div>
      </div> 
    </body>
</html>

