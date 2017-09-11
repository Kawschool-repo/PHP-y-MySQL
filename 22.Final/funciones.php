<?php

function agregarProducto($resultado,$indice,$cantidad = 1){
  
      $_SESSION['carrito'][ $indice] = array(
          'id'=>$resultado['id'],
          'titulo'=>$resultado['titulo'],
          'foto'=>$resultado['foto'],
          'precio'=>$resultado['precio'],
          'cantidad'=>$cantidad 
        );

  }



function calcularTotal(){
  $total=0;
    if(isset($_SESSION['carrito'])){
              foreach($_SESSION['carrito'] as $indice => $value){
                $total += $value['precio'] * $value['cantidad'];
              }
    }

  return $total;
}

function cantidadPeliculas(){
  $c=0;
    if(isset($_SESSION['carrito'])){
              foreach($_SESSION['carrito'] as $indice => $value){
                $c++;
              }
    }

  return $c;
}