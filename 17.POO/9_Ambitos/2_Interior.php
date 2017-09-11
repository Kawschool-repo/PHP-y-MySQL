<?php

class Producto {
    const TAX = 18;
}


class OtraClase extends Producto{
    public static $sueldo = 5000;

    public function mostrarConstante()
    {
        print parent::TAX;
        print '<hr>';
        print self::$sueldo;
    }

}

$o = new OtraClase;
$o->mostrarConstante();

