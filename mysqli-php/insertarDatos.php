<?php 

//Establecemos conexión a la base de datos
$conexion = new mysqli('localhost', 'joseantonio098', '', 'mysqli_practica'); 

if ( $conexion->connect_errno ){ // ---> Comprobar si hay un error con la conexión 

    die('Lo siento hubo un problema con el servidor');

} else {
    
    $sql = "INSERT INTO usuarios VALUES(NULL, 'Jhoana', 23)"; // ---> Realizamos la consulta SQL
    $conexion->query($sql);

    // ---> Comprobando si hubo cambios con la consulta
    if($conexion->affected_rows >= 1){ // ---> Muestra cantidad de filas agregadas
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }else{
        echo 'No se agregó nada';
    }   

}

?>