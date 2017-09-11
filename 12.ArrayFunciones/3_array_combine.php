<?php

$a = ['valor 1','valor 2','valor 3'];
$b = ['valor 4','valor 5','valor 6'];

print '<pre>';
print_r(

    array_combine(
        $a, $b
    )
);
