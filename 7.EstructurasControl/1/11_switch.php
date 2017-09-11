<?php
$numero_dia = 7;
switch($numero_dia){
    case 1:
            print "LUNES";
            break;
    case 2:
            print "MARTES";
            break;
    case 3:
            print "MIERCOLES";
            break;
    case 4:
            print "JUEVES";
            break;
    case 5:
            print "VIERNES";
            break;
    case 6:
            print "SABADO";
            break;
    case 7:
            print "DOMINGO";
            break;
    default:
            print "ERROR";
            break;
}

print '<hr>';

$nombre_estacion ='INVIERNOsss';
switch($nombre_estacion):
    case 'INVIERNO':
            print "ESTAMOS EN INVIERNO";
            break;
    case 'PRIMAVERA':
            print "ESTAMOS EN PRIMAVERA";
            break;
    case 'OTOÑO':
            print "ESTAMOS EN OTOÑO";
            break;
    case 'VERANO':
            print "ESTAMOS EN VERANO";
            break;
      default:
            print "ESTACION INCORRECTA";
            break;
endswitch;