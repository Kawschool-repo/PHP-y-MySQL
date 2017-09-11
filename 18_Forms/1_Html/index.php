<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        
      
        <nav>
            <ul>
                <li>
                    <a href="index.php">INICIO</a>
                </li>
                <li>
                    <a href="nosotros.php">NOSOTROS </a>
                </li>
                <li>
                     <a href="contactenos.php">CONTACTENOS </a>
                </li>

            </ul>    
        </nav>

        <h1>    
            Bienvenidos al curso de PHP
        </h1>
        <h6>    
            Gracias !!!
        </h6>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel maxime alias sit autem culpa rerum possimus minus ipsum ad nemo atque quasi sunt, cupiditate corrupti, impedit illum expedita dolores corporis.
        </p>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel maxime alias sit autem culpa rerum possimus minus ipsum ad nemo atque quasi sunt, cupiditate corrupti, impedit illum expedita dolores corporis.
        </div>
        <hr>
        <form>
            <p>
                <label>Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </p>
            <p>
                <label>Apellido</label>
                <input  class="form-control" type="text" name="apellidos">
            </p>
            <p>
                <label>Usuario</label>
                <input  class="form-control" type="text" name="usuario">
            </p>
            <p>
                <label>Clave</label>
                <input  class="form-control" type="password" name="clave">
            </p>
            <p>
                <label>Lenguajes Favoritos</label>
                <select  class="form-control" name="lenguajes_favoritos">
                    <option value="1">PHP</option>
                    <option value="2">PYTHON</option>
                    <option value="3">RUBY</option>
                </select>
            </p>
            <p>
                <label>Horarios</label>
                <input type="checkbox"> Lunes<br>
                <input type="checkbox"> Martes<br>
                <input type="checkbox"> Miercoles<br>
                <input type="checkbox"> Jueves<br>
                <input type="checkbox"> Viernes<br>
            </p>
            <p>
                <label>Genero</label>
                <input  type="radio" name="genero"> Masculino<br>
                <input  type="radio" name="genero"> Femenino<br>
            </p>
             <p>
                <label>Comentario</label><br>
                <textarea  class="form-control" name="comentario" id="" rows="3"></textarea>
            </p>
             <p>
                <label>Foto</label><br>
                <input  class="form-control" type="file" name="foto">
            </p>
            <p>
            <input type="submit" class="btn btn-info">
            </p>


        </form>



      </div> 

    </body>
</html>

