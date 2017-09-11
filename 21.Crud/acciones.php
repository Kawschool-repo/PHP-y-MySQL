 <?php

require 'vendor/autoload.php';

$pelicula = new Kawschool\Pelicula;

if($_SERVER['REQUEST_METHOD']==='POST'){

    if($_POST['accion']==='Registrar'){

        if(empty($_POST['titulo']))
            exit('Completar Titulo');

        if(empty($_POST['descripcion']))
            exit('Completar Descripcion');

        if(!is_numeric($_POST['pais_id']))
            exit('Seleccionar Pais');
        

        $_params = array(
            "titulo"=> $_POST['titulo'],
            "descripcion"=>$_POST['titulo'],
            "foto"=> subirFoto(),
            "pais_id"=>$_POST['pais_id'],
            "fecha"=> date('Y-m-d')
        );

        $resultado = $pelicula->registrar($_params);

        if($resultado){
            header('Location: index.php');
        }else{
            print 'Error al Registarar';
        }
      

    }

    if($_POST['accion']==='Actualizar'){
         if(empty($_POST['titulo']))
            exit('Completar Titulo');

        if(empty($_POST['descripcion']))
            exit('Completar Descripcion');

        if(!is_numeric($_POST['pais_id']))
            exit('Seleccionar Pais');


        $_params = array(
            "titulo"=> $_POST['titulo'],
            "descripcion"=>$_POST['titulo'],
            "pais_id"=>$_POST['pais_id'],
            "fecha"=> date('Y-m-d'),
            "id" => $_POST['id']
        );
        
        if(!empty($_POST['foto_temp']))
             $_params["foto"] = $_POST['foto_temp'];
        
        if(!empty($_FILES['foto']['name']))
             $_params["foto"] = subirFoto();

        
        $resultado = $pelicula->actualizar($_params);
        
        if($resultado){
            header('Location: index.php');
        }else{
            print 'Error al actualizar';
        }

    }


}
if($_SERVER['REQUEST_METHOD']==='GET'){

    $id = $_GET['id'];
    $resultado = $pelicula->eliminar($id);
    if($resultado){
            header('Location: index.php');
    }else{
        print 'Error al eliminar';
    }

}



function subirFoto(){

    
        $carpeta = './upload/';

        //INDICAMOS LA RUTA DONDE VAMOS A SUBIR LA FOTO
        // Y ESPECIFICAMOS LA FOTO CON SU EXTENSION
        $archivo = $carpeta.$_FILES['foto']['name'];

        $resultado = move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);
        
        return $_FILES['foto']['name'];

}




/*

$_params = array(
    "titulo"=> '21',
    "descripcion"=>'La mejor pelicula de comedia',
    "foto"=> 'sin foto',
    "pais_id"=>1,
    "fecha"=> date('Y-m-d')
);
 
$res = $pelicula->registrar($_params);
*/


/*
$_params = array(
    "titulo"=> 'Rambo',
    "descripcion"=>'La mejor pelicula de accion',
    "foto"=> 'sin foto',
    "pais_id"=>1,
    "fecha"=> date('Y-m-d'),
    "id"=>1
);
 
$res = $pelicula->actualizar($_params);
print '<pre>';
print_r($res); 
*/

/*
$res = $pelicula->mostrar();

print '<pre>';
print_r($res);
*/
/*
$res = $pelicula->mostrarPorId(25);

print '<pre>';
var_dump($res);
*/
