<?php

require 'autoload.php';

use App\Cliente;

use App\Empleado;


$cliente = new Cliente;

$cliente->mostrarMensaje();
 
print '<hr>';

$empleado = new Empleado;
$empleado->mostrarMensaje();
 



