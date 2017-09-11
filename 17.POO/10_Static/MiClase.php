<?php

class Padre{

    public static $sueldo = 5000;

    public function mostrarSueldo()
    {
        return self::$sueldo;
    }


}


class Hijo extends Padre{

    public function mostrarSueldo ()
    {
        return parent::$sueldo;
    }


}

print Padre::$sueldo;
print '<hr>';
$p = new Padre;
print $p::$sueldo;