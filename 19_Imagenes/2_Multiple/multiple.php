<?php

$carpeta = './upload/';

$cantidad_fotos = count($_FILES['foto']['name']);


for($x = 0; $x < $cantidad_fotos; $x++){

    //INDICAMOS LA RUTA DONDE VAMOS A SUBIR LA FOTO
    // Y ESPECIFICAMOS LA FOTO CON SU EXTENSION
    $archivo = $carpeta.$_FILES['foto']['name'][$x];

    $resultado = move_uploaded_file($_FILES['foto']['tmp_name'][$x],$archivo);
    var_dump($resultado);
    


}

