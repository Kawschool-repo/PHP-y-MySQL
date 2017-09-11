<?php
session_start();


if(isset($_SESSION['carrito'])){
    
    foreach($_SESSION['carrito'] as $indice => $array):

        print $array['codigo'].'--'.$array['nombre'].'--'.$array['precio'].'<br>';


    endforeach;


}else{
    print 'El carrito no existe';
}

