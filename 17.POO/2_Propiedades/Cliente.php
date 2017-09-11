<?php

class Cliente{

    public $codigo;
    public $nombre;
    public $apellido;


    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

}


//INSTANCIAR LA CLASE

$c = new Cliente;
$c->setCodigo(11111);
$c->setNombre('Elvis');
$c->setApellido('Pinares Galvan');
print  $c->getCodigo() .' - '.  $c->getNombre(). ' - '. $c->getApellido();

//var_dump($c);








