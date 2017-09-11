<?php
//ACTIVAR EL USO DE LAS SESSIONES EN PHP
session_start();

$_SESSION['carrito'] =[
    [
        'codigo'=>1,
        'nombre'=>'producto 1',
        'precio'=>10
    ],
    [
        'codigo'=>2,
        'nombre'=>'producto 2',
        'precio'=>20
    ],
     [
        'codigo'=>3,
        'nombre'=>'producto 3',
        'precio'=>30
    ]
];

unset($_SESSION['carrito'][2]);


