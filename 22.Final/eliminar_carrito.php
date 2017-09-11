<?php
session_start();

if(isset($_GET['id'])){
   $id = $_GET['id'];
    $indice = md5($id);

    unset($_SESSION['carrito'][$indice]);

    header('Location: carrito.php');
}