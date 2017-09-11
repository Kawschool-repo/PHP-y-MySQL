<?php

function mostrarMensaje($saludo='Hola, Kawschool'){

    return  $saludo;

}

function sumarNumeros($x=5, $y=5){
    return  $x+$y;
}

print mostrarMensaje();
print '<hr>';
print sumarNumeros();

