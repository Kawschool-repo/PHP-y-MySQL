<?php
//NO SE PUEDE INSTANCIAR LA CLASE ABSTRACTA
abstract class Persona{

    //ES IMPLEMENTAR EL METODO
    public function mostrarNombre(){

    }

    //DEFINIR EL METODO
    abstract protected function generarCodigo($prefijo);

}
class Alumno extends Persona{
    public function generarCodigo($prefijo){
        return "{$prefijo}".uniqid().'-'.time();
    }
}

class Profesor extends Persona{
    public function generarCodigo($prefijo){
        return "{$prefijo}".uniqid();
    }
}

$a = new Alumno;
print $a->generarCodigo('ALU-');
print '<hr>';

$p = new Profesor;
print $p->generarCodigo('PRF-');

 