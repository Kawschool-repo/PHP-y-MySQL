<?php

//$numeros = array(10,20,30,40,50);
$numeros = [10,20,30,40,50];
$comidas = ['comida 1','comida 2','comida 3'];
$comidas[]='comida 4';
$comidas[]='comida 5';

array_push($comidas,'comida push');

print '<pre>';
//print_r($numeros);
print sizeof($numeros);
print '<hr>';
foreach ($numeros as $valor):

print $valor ."<br>";

endforeach;
print '<hr>';
for($x = 0; $x <count($comidas);$x++){

    print $comidas[$x]."<br>";
}

