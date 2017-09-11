<?php

require 'vendor/autoload.php';

use Kawschool\Cliente;

use Kawschool\Empleado;


$cliente = new Cliente;

$cliente->mostrarMensaje();

print '<hr>';

$empleado = new Empleado;

$empleado->mostrarMensaje();

