<?php

$array = [
    0=>'AZUL',1=>'ROJO',2=>'VERDE',3=>'AMARRILO'
];

print '<pre>';
print_r($array);
print '<hr>';
print_r(
    array_search('AZUL',$array)

);
print '<hr>';
print_r(
    array_search('AMARRILO',$array)

);