<?php

$array = [11,12,45,56,90,500];
//$array = array(11,12,45,56,90);


foreach($array as $indice => $valor){
    print $indice ."=>". $valor."<br>";
}

foreach($array as $indice => $valor):
    print $indice ."=>". $valor."<br>";
endforeach;



