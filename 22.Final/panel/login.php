<?php



if($_SERVER['REQUEST_METHOD']==='POST'){

    require '../vendor/autoload.php';
    $usuario = new Kawschool\Usuario;



    if(empty($_POST['nombre_usuario']))
        exit('Completar Nombre Usuario');

    if(empty($_POST['clave']))
        exit('Completar Clave');

    $_params = array(
                "nombre_usuario"=> $_POST['nombre_usuario'],
                "clave"=>$_POST['clave']
            );


    $resultados =  $usuario->login( $_params );

    if($resultados){
        session_start();
        $_SESSION['usuario'] = $_params;
        header('Location:dashboard.php');
    }
        
    
    print '<h2>ERROR AL INTENTAR INICIAR SESION</h2>';

    
}