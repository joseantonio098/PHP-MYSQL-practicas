<?php

try{
    // Código ---> Se ejecutará si no hay errores
    $conexion = new PDO('mysql:host=localhost;dbname=php_practicas', 'joseantonio098', '');

    // Consultas Preparadas ---> (fetch)
    $consulta = $conexion->prepare('INSERT INTO usuarios(ids,usuario,contrasena) VALUES(NULL,:usuario,:contrasena)'); // ---> Establecemos la consulta

    $consulta->execute( array(':usuario' => 'joss', ':contrasena' => '12345') ); // ---> Ejecutamos la consulta
    $resultados = $consulta->fetch(); // ---> fetch( devuelve solo 1 "registro" );

    print_r($consulta->errorInfo());
}catch(PDOException $e){
    // Error ---> Se ejecutará si encuentra errores
    echo 'Error: '. $e->getMessage();
}

?>