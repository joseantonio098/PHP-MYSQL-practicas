<?php
function Conectar(){
    $conexion = null;
    $host = 'localhost';
    $db = 'php_practicas';
    $user = 'joseantonio098';
    $pwd = '';

    try{
        $conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        
    }catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }

    return $conexion;
}
?>