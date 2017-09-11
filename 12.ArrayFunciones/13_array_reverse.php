<?php

$array = array(
    'php',4.0,['verde','rojo']
);

print '<pre>';

print_r(

    array_reverse($array,true)

);