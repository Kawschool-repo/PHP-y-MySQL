<?php

session_start();

    


if($_SERVER['REQUEST_METHOD']==='POST'){
    
    $_id = $_POST['id'];
    $indice = md5($_id);
    $_cantidad = $_POST['cantidad'];

    if(array_key_exists($indice,$_SESSION['carrito'])){
        $_SESSION['carrito'][ $indice]['cantidad'] =   $_cantidad;
    }
    

    header('Location: carrito.php');

}
