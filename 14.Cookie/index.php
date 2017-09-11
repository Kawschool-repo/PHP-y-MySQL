<?php

$nombre ='kawschool';
$token = md5($nombre);
$duracion = time() + (86400*30);

// 1 minuto => 60 segundos
// 60 minutos equivale  3600
// 24 horas equivale 86400
// 1 mes equivale 86400 * 30 = 2 592 000


setcookie($nombre, $token,$duracion,'/');

print $_COOKIE['kawschool'];





