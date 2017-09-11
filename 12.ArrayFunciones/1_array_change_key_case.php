<?php

$_productos = [
    'codigo'=>1,
    'nombre'=>'producto 1',
    'precio'=>10
];

print '<pre>';
print_r($_productos);
print '<hr>';
print_r(

    array_change_key_case(
        $_productos,CASE_UPPER
    )

);
print_r(

    array_change_key_case(
        $_productos,CASE_LOWER
    )

);