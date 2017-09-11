<?php
$objeto = new stdClass();
$objeto->alumnos = ['elvis','janina','hugo'];

print '<pre>';
print_r($objeto);

if(is_object($objeto)):

    print 'ESTO ES UN OBJETO';
else:
    print 'ERROR';
endif;
