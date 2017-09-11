<?php


if($_SERVER['REQUEST_METHOD']==='POST'){
    require 'funciones.php';
    session_start();


        require 'vendor/autoload.php';
        $cliente = new Kawschool\Cliente;
    

       $_params = array(
            "nombre"=> $_POST['nombre'],
            "apellidos"=>$_POST['apellidos'],
            "email"=> $_POST['email'],
            "telefono"=>$_POST['telefono'],
            "comentario"=>$_POST['comentario'],
        );

        $id_cliente = $cliente->registrar($_params);


        $pedido = new Kawschool\Pedido;

        $_params = array(
            "cliente_id"=> $id_cliente,
            "total"=> calcularTotal(),
            "fecha"=>  date('Y-m-d')
        );


        $id_pedido = $pedido->registrarPedido($_params);

         if(isset($_SESSION['carrito'])){
                 
            foreach($_SESSION['carrito'] as $indice => $value){
                 $_params = array(
                    "pedido_id"=> $id_pedido,
                    "pelicula_id"=> $value['id'],
                    "precio"=>$value['precio'],
                    "cantidad"=>$value['cantidad'],
                );
                $pedido->registrarDetallePedido($_params);
            }
        }


        $_SESSION['carrito'] = [];

        header('Location: index.php');
       


}

