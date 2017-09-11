<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <fieldset>
                <legend>Subir varias imagenes al servidor</legend>
                <form action="multiple.php" method="post" enctype="multipart/form-data">
                     
                     <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto[]" multiple >
                    </div>
                    <input type="submit" class="btn btn-success ">



                </form>
            </fieldset>
      </div> 
    </body>
</html>

