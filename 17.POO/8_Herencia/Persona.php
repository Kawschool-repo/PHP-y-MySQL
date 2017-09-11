<?php
class Persona{
    protected $nombre;
    protected $pais;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPais()
    {
        return $this->pais;
    }
}
class Alumno extends Persona{
}
class Profesor extends Persona{
}

$a = new Alumno;
$a->setNombre('Ramon');
$a->setPais('Mexico');
print $a->getNombre() . ' '. $a->getPais(); 
print '<hr>';
$p = new Profesor;
$p->setNombre('Hugo');
$p->setPais('Peru');
print $p->getNombre() . ' '. $p->getPais(); 




