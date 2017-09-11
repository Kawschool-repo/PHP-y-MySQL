<?php

namespace Kawschool;

class Pais{

    private $config;
    private $cn =null;
    
    public function __construct(){

        $this->config = parse_ini_file("config.ini");

        $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

        ));

    }
   
    public function mostrar()
    {

        $sql = "SELECT * FROM `paises`";

        $resultado =  $this->cn->prepare($sql);


        if($resultado->execute())
            return $resultado->fetchAll();


        return false;

    }
    
     

    



}