<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
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
                        <tr>
                            <td>1</td>
                            <td>Ted</td>
                            <td>EE.UU</td>
                            <td>Sin Foto</td>
                            <td>
                                <a href="eliminar.php?codigo=1&tipo=eliminar" class="btn btn-danger btn-sm" >Eliminar</a>
                                <a href="form_actualizar.php?codigo=1" class="btn btn-success btn-sm" >Actualizar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>La Mascara</td>
                            <td>EE.UU</td>
                            <td>Sin Foto</td>
                            <td>
                                <a href="eliminar.php?codigo=2&tipo=eliminar" class="btn btn-danger btn-sm" >Eliminar</a>
                                <a href="form_actualizar.php?codigo=2" class="btn btn-success btn-sm" >Actualizar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
      </div> 
    </body>
</html>

