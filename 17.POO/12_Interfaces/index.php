<?php

interface iDatabase{
    function Registrar();
    function Listar();
    function BuscarPorId($id);
}

class Empleado implements iDatabase{
   public function Registrar(){

    }
   public function Listar(){
    }
    public function BuscarPorId($id){
    }
}

class Usuario implements iDatabase{
   public function Registrar(){

    }
   public function Listar(){
    }
    public function BuscarPorId($id){
    }
}

$e = new Empleado;

