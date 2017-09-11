<?php
echo 'Bienvenidos  a Kawschool';
echo '<hr>';
echo 'Kawschool dice: I\'am from Peru';
echo '<hr>';

$curso ='PHP';
echo "Mi lenguaje favorito es: $curso";
echo '<hr>';

//HEREDOC
$cadena = <<<EOD
Esto es una cadena de tipo HEREDOC.
Vamos a aprender php, el mejor lenguaje que existe 
para crear aplicaciones web
<strong>KAWSCHOOL</strong>

EOD;
print $cadena;



