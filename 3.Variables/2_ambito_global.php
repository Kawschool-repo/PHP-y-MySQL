<?php

$a = 1;
$b = 2;

function sumar()
{
   // global $a,$b;
    //AQUI VA TODO EL CODIGO Q SE VA PROGRAMAR
    //$b = $a+$b;

    $GLOBALS['b'] = $GLOBALS['a']+$GLOBALS['b'];

}

sumar();
print $b;