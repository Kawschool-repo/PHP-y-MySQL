<?php

$str = '1235';

//202cb962ac59075b964b07152d234b70 => ESTO ESTARIA EN TU BASE DATOS

if(md5($str) ==='202cb962ac59075b964b07152d234b70'){
    print 'Contraseña valida';
}else{
    print 'Error, contraseña incorrecta';
}


