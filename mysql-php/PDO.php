<?php

try{
    // Código ---> Se ejecutará si no hay errores
    $conexion = new PDO('mysql:host=localhost;dbname=heidisql', 'joseantonio098', '');

    // Método query 
    $resultados = $conexion->query("SELECT * FROM maestros"); // ---> Generamos la consulta de la bd.

    // ---> Traemos los datos
    foreach ( $resultados as $fila ){
        echo $fila['nombre'].'<br>';
    }


}catch(PDOException $e){
    // Error ---> Se ejecutará si encuentra errores
    echo 'Error: '. $e->getMessage()

?>