<?php

function conexion($tabla, $usuario, $pass){
    
    try{
        $conexion = new PDO(" mysql:host=localhost;dbname=$tabla", $usuario, $pass );

    } catch (PDOException $e) {
        return false;
    }

}
?>