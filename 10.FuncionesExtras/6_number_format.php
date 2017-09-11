<?php

$numeros = 1234.56;
//NOTACION INGLESA
print number_format($numeros);

print '<hr>';

//NOTACION FRANCESA
print number_format($numeros, 2,',',' ');

print '<hr>';
//NOTACION INGLESA SIN SEPARADOR DE MILLARES

print number_format($numeros, 2,'.','');

