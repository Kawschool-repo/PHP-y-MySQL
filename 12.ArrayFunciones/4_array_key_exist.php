<?php
$_productos = [
    'codigo'=>1,
    'nombre'=>'producto 1',
    'precio'=>10
];

print '<pre>';
print_r($_productos);
print '<hr>';

var_dump(
    array_key_exists(
        'precios',$_productos
    )
);