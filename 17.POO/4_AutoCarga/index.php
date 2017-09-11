<?php

spl_autoload_register(function($nombreClase){

    require $nombreClase.'.php';

});


/*
require 'Funciones.php';
require 'Empleado.php';
*/


//INSTANCIAR LA CLASE FUNCIONES
$f = new Funciones;
$f->mostrarConstante();


print '<hr>';

//INSTANCIAR LA CLASE EMPLEADO
$e = new Empleado;
$e->nombre = 'ELVIS';
$e->apellido = 'PINARES';

print $e->nombre .' - '.$e->apellido;