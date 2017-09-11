<?php

$dias =['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
$cantidad_elem = count($dias);

for($x = 0; $x< $cantidad_elem; $x++){

    if($dias[$x] =='LUNES'){
       continue;
    }

    print $dias[$x]."<br>";

}



