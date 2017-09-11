<?php


function potencia($n)
{
    return ($n*$n*$n);
}

$array = [1,2,3,4,5];

print '<pre>';
print_r(

    array_map(
        "potencia",$array
    )

);

