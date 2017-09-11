<?php

namespace Kawschool;

class Pedido{

    private $config;
    private $cn =null;
    
    public function __construct(){

    
        $this->config = parse_ini_file(__DIR__.'/../config.ini');

        $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

        ));

    }

    public function registrarPedido($_params)
    {

        $sql = "INSERT INTO `pedidos`(`cliente_id`, `total`, `fecha`) 
        VALUES (:cliente_id,:total,:fecha)";

        $resultado =  $this->cn->prepare($sql);

        $_array = array(
            ":cliente_id"=>$_params['cliente_id'],
            ":total"=>$_params['total'],
            ":fecha"=>$_params['fecha'],
        );


        if($resultado->execute($_array))
             return $this->cn->lastInsertId();


        return false;

    }

    public function registrarDetallePedido($_params)
    {

        $sql = "INSERT INTO `detalle_pedidos`(`pedido_id`, `pelicula_id`, `precio`,`cantidad`) 
        VALUES (:pedido_id,:pelicula_id,:precio,:cantidad)";

        $resultado =  $this->cn->prepare($sql);

        $_array = array(
            ":pedido_id"=>$_params['pedido_id'],
            ":pelicula_id"=>$_params['pelicula_id'],
            ":precio"=>$_params['precio'],
            ":cantidad"=>$_params['cantidad'],
        );


        if($resultado->execute($_array))
             return true;


        return false;

    }


    

     public function mostrar()
    {

        $sql = "SELECT p.id, nombre, apellidos, email, total, fecha   FROM pedidos p INNER JOIN clientes c ON p.cliente_id = c.id ORDER BY p.id DESC";

        $resultado =  $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();


        return false;

    }
   
    



}