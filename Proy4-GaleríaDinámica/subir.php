<?php 

require 'function.php';
$conexion = conexion('php_practicas','joseantonio098','');

//Si no hay conexión entonces ....
if(!$conexion){
    die();
    //Se recomienda redireccionar a una pagina de error --> 404..
}

//Si se ha conectado por el metodo POST y hay un archivo ingresado entonces ....
if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES) ){

    $check = @getimagesize($_FILES['foto']['tmp_name']); //Accedemos a la ruta temporal del archivo
    if( $check !== false ){
        $carpeta_destino = 'fotos/'; 
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name']; //La ruta del archivo --> fotos/...jpg
        
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido); 
        //Permite subir nuestro archivo

        $statement = $conexion->prepare('
            INSERT INTO fotos (titulo,imagen,texto) 
            VALUES (:titulo, :imagen, :texto)
        ');
        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto' => $_POST['texto']
        ));
        header('Location: index.php');

    }else{
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }


}



require 'views/subir.view.php';

?>