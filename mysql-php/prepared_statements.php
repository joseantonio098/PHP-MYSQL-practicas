<?php

$id = $_GET['id'];

try{
    // Código ---> Se ejecutará si no hay errores
    $conexion = new PDO('mysql:host=localhost;dbname=heidisql', 'joseantonio098', '');

    // Consultas Preparadas ---> (fetch)
    $consulta = $conexion->prepare('SELECT * FROM maestros WHERE id = :id'); // ---> Establecemos la consulta

    $consulta->execute( array(':id' => $id) ); // ---> Ejecutamos la consulta

    $resultados = $consulta->fetch(); // ---> fetch( devuelve solo 1 "registro" );

    print_r($resultados);



}catch(PDOException $e){
    // Error ---> Se ejecutará si encuentra errores
    echo 'Error: '. $e->getMessage();
}

?>