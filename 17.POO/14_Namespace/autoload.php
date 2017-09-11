<?php

function __autoload($cadena){

    $nombreArchivo = explode('\\',$cadena);

    $archivo = end($nombreArchivo).'.php';

    require 'App/'.$archivo;



}