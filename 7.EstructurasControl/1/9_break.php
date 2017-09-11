<?php

$dias =['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
$cantidad_elem = count($dias);

for($x = 0; $x< $cantidad_elem; $x++){

    if($dias[$x] =='VIERNES'){
        break;
    }

    print $dias[$x]."<br>";

}



