<?php


class Usuario{

    public $codigo; //PUEDE SER LEIDO DESDE CUALQUIER PARTE DE LA APP
    protected $nombreUsuario; //ES PARA TRABAJAR AL NIVEL DE HERENCIA
    private $clave; // SOLO SE PUEDE LEER EN CONTEXTO DE LA CLASE

    function __construct(){
        $this->codigo = 12222;
        $this->nombreUsuario = 'admin';
        $this->clave = 32323232;
    }

    public function mostrarNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    public function mostrarClave()
    {
        return $this->clave;
    }


}

$u = new Usuario; //INSTANCIAR LA CLASE USUARIO
print $u->mostrarNombreUsuario();
print '<hr>';
print $u->mostrarClave();

