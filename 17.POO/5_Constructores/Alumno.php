<?php

class Alumno{

        public $nombre ;
        public $apellido ;

        function __construct($nombre, $apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            
        }
        public function mostrarDatos()
        {
            return $this->nombre  . ' '. $this->apellido;
        }

        public function mostrarSaludo()
        {
            print 'Hola a todos, bienvenidos al curso de php';
        }

}


//INSTANCIAR LA CLASE ALUMNO
$a = new Alumno('Elvis','Pinares');

print $a->mostrarDatos();



