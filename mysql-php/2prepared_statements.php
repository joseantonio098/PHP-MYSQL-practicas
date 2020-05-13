<?php

try{
    // Código ---> Se ejecutará si no hay errores
    $conexion = new PDO('mysql:host=localhost;dbname=heidisql', 'joseantonio098', '');

    // Consultas Preparadas ---> (fetchAll)
    $consulta = $conexion->prepare('SELECT nombre FROM maestros'); // ---> Establecemos la consulta

    $consulta->execute(); // ---> Ejecutamos la consulta

    $resultados = $consulta->fetchAll(); // ---> fetchAll( devuelve todo los "registros" );

    foreach( $resultados as $fila){
        echo 'usted se llama '. $fila['nombre'] . '<br>';
    }
    
}catch(PDOException $e){
    // Error ---> Se ejecutará si encuentra errores
    echo 'Error: '. $e->getMessage();
}

?>