<?php

$peliculas =[
    'terror'=>['terror 1','terror 2','terror 3','terror 4'],
    'comedia'=>['comedia 1','comedia 2','comedia 3','comedia 4'],
    'accion'=>['accion 1','accion 2','accion 3','accion 4'],
];
$peliculas_2 =[
    ['terror 1','terror 2','terror 3','terror 4'],
    ['comedia 1','comedia 2','comedia 3','comedia 4'],
    ['accion 1','accion 2','accion 3','accion 4'],
];

print '<pre>';
print_r($peliculas);
//print $peliculas['terror'][3];


 
foreach($peliculas as $indice => $valor){

    print $indice ."<br>";
    foreach( $valor as $v){
        print "- ".$v."<br>";
    }

}
