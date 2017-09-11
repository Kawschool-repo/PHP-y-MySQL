<?php

for($x= 0;$x<=5; $x++){

    print $x."<br>";
}

for($x= 0;$x<=5; $x++):
    print $x."<br>";
endfor;

$array = ['arroz con pollo','ceviche'];

print "<br>";

for($x= 0;$x<2; $x++):
    print $array[$x]."<br>";
endfor;
