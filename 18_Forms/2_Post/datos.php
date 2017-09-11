<?php

print '<pre>';

print 'Mi titulo es:'.$_POST['titulo'].'<br>';
print 'Mi Descripción es:'.$_POST['descripcion'].'<br>';
print 'Mi Pais es:'.$_POST['paises'].'<br>';

print '<hr>';

$archivo = explode('.', $_FILES['foto']['name']);

print 'Mi Pelicula favorita es:'. $archivo[0].'<br>';
print 'Tipo de Foto es:'. $_FILES['foto']['type'].'<br>';
 