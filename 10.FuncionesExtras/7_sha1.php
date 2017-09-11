<?php

$str = '1213';

 
//40bd001563085fc35165329ea1ff5c5ecbdbbeef => ESTO ESTARIA EN TU BASE DATOS

if(sha1($str) ==='40bd001563085fc35165329ea1ff5c5ecbdbbeef'){
    print 'Contraseña valida';
}else{
    print 'Error, contraseña incorrecta';
}


