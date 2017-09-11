<?php

class Producto {
    const TAX = 18;
}

$nombreClase = 'Producto';
print $nombreClase::TAX; // a partir de la version 5.3
print '<hr>';
print Producto::TAX;

