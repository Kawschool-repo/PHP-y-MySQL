<?php
$_productos = [
    'codigo'=>1,
    'nombre'=>'producto 1',
    'precio'=>10
];


$_pelicula = [

    'codigo1'=>1,
    'nombre2'=>'pelicula 1',
    'precio3'=>100
];
$_colores = ['rojo','verde','azul'];

$fusion = array_merge($_productos,$_pelicula,
$_colores);

print '<pre>';
print_r(
    $fusion
);
