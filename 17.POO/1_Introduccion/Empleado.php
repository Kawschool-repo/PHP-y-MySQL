<?php

class Empleado{

    public $nombre;
    public $apellido;



}

//INSTANCIAR UNA CLASE => EMPLEADO

$e = new Empleado;
$e->nombre = 'ELVIS';
$e->apellido = 'PINARES';

var_dump($e);

