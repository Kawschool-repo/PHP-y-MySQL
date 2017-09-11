<?php

$_productos = [
    [
        'codigo'=>1,
        'nombre'=>'producto 1',
        'precio'=>10
    ],
    [
        'codigo'=>2,
        'nombre'=>'producto 2',
        'precio'=>20
    ]
];
print '<pre>';
print_r($_productos);
print '<hr>';
print_r(
    array_column(
        $_productos,'precio'
    )
);