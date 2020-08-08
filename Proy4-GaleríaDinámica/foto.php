<?php
require 'function.php';
$conexion = conexion('galeria_practica','joseantonio098','');

if(!$conexion){
    die();
    //Se recomienda redireccionar a una pagina de error --> 404..
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if($id == false){
    header('Location: index.php');
}
    
$statement = $conexion->prepare(
    "SELECT * FROM fotos WHERE id = :id"
);

$statement->execute( array(':id' => $id) );
$foto = $statement->fetch();

if(!$foto){
    header('Location: index.php');
}


require 'views/foto.view.php';
?>