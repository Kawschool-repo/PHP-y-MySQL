<?php

class Funciones{

    const IMPUESTO = 18;

    public function mostrarConstante()
    {
        print 'El valor de la constante es:'.self::IMPUESTO;
    }



}


$f = new Funciones;
$f->mostrarConstante();
print '<hr>';
print Funciones::IMPUESTO;

print '<hr>';
print $f::IMPUESTO;


