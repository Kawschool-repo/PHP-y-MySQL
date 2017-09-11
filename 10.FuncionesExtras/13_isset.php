<?php

$nombre = 'hola a todos';

$dias = ['lunes','martes'];

var_dump(isset($nombres));

print '<hr>';

if(isset($dias[1])){
    print $dias[1];
}else{
    print 'no existe';
}