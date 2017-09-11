<?php

$genial = 'fantástico';
$pelicula = ['nombre'=>'El chavo del 8'];

//echo 'Esto es '.$genial;

echo "Esto es: ${genial} la primera forma";
echo '<hr>';
echo "Esto es: {$genial} la segunda forma";
echo '<hr>';
echo "Esto es {$pelicula['nombre']}";






