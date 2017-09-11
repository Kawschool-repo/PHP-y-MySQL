<?php


$array1 = (object)array(
        'codigo'=> 1,
        'nombre'=>'kawschool'
   
    );

//print $array1['nombre'];

//print $array1->nombre;

print $array1->{'nombre'};

//var_dump($array1);
print '<hr>';

$miobjeto = new stdClass();
$miobjeto->nombre = 'Kawschool - PERU';

print $miobjeto->nombre;

//print $miobjeto->{'nombre'};


