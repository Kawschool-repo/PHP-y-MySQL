<?php

$carpeta = './upload/';

//INDICAMOS LA RUTA DONDE VAMOS A SUBIR LA FOTO
// Y ESPECIFICAMOS LA FOTO CON SU EXTENSION
$archivo = $carpeta.$_FILES['foto']['name'];

$resultado = move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);
var_dump($resultado);