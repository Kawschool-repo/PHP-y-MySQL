<?php

namespace Kawschool;

class Pelicula{

    private $config;
    private $cn =null;
    
    public function __construct(){

        $this->config = parse_ini_file("config.ini");

        $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

        ));

    }

    public function registrar($_params)
    {

        $sql = "INSERT INTO `peliculas`(`titulo`, `descripcion`, `foto`, `pais_id`, `fecha`) 
        VALUES (:titulo,:descripcion,:foto,:pais_id,:fecha)";

        $resultado =  $this->cn->prepare($sql);

        $_array = array(
            ":titulo"=>$_params['titulo'],
            ":descripcion"=>$_params['descripcion'],
            ":foto"=>$_params['foto'],
            ":pais_id"=>$_params['pais_id'],
            ":fecha"=>$_params['fecha'],
        );


        if($resultado->execute($_array))
            return true;


        return false;

    }


    public function actualizar($_params)
    {



        $sql = "UPDATE `peliculas` 
        SET `titulo`=:titulo,`descripcion`=:descripcion,`foto`=:foto,`pais_id`=:pais_id,`fecha`=:fecha
        WHERE id= :id";

        $resultado =  $this->cn->prepare($sql);

        $_array = array(
            ":titulo"=>$_params['titulo'],
            ":descripcion"=>$_params['descripcion'],
            ":foto"=>$_params['foto'],
            ":pais_id"=>$_params['pais_id'],
            ":fecha"=>$_params['fecha'],
            ":id"=>$_params['id']
        );


        if($resultado->execute($_array))
            return true;


        return false;

    }

    public function eliminar($id)
    {

        $sql = "DELETE FROM `peliculas` WHERE id=:id";

        $resultado =  $this->cn->prepare($sql);

        $_array = array(
            ":id"=>$id
        );
        if($resultado->execute($_array))
            return true;
        return false;

    }

     public function mostrar()
    {

        $sql = "SELECT peliculas.id,titulo,descripcion,foto,nombre,fecha,estado  FROM peliculas
INNER JOIN paises
ON peliculas.pais_id = paises.id";

        $resultado =  $this->cn->prepare($sql);


        if($resultado->execute())
            return $resultado->fetchAll();


        return false;

    }
    
    public function mostrarPorId($id)
    {

        $sql = "SELECT * FROM peliculas WHERE id=:id";

        $resultado =  $this->cn->prepare($sql);

         $_array = array(
             
            ":id"=>$id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();


        return false;

    }

    



}