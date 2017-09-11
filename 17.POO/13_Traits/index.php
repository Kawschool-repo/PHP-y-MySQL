<?php
interface iDatabase{
    function Registrar();
    function Listar();
    function BuscarPorId($id);
}
class Persona {
    public $nombre;
    public $pais;
}
trait Funciones {
    public function getMay($cadena)
    {
        return strtoupper($cadena);
    }
    public function getMin($cadena)
    {
        return strtolower($cadena);
    }
}

class Empleado extends Persona implements iDatabase{
    use Funciones;
    public function Registrar(){

    }
    public function Listar(){
    }
    public function BuscarPorId($id){
    }

    public function getNombre(){

        return $this->getMin($this->nombre);

    }



}

$e = new Empleado;
$e->nombre = 'HUGO TRIGOSO PAREDES';
print $e->getNombre();
 
