<?php 

//Establecemos conexión a la base de datos
$conexion = new mysqli('localhost', 'joseantonio098', '', 'mysqli_practica'); 

if ( $conexion->connect_errno ){ // ---> Comprobar si hay un error con la conexión 

    die('Lo siento hubo un problema con el servidor');

} else {

    // ---> Preparamos nuestra consulta
    $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre, edad) VALUES(?, ?, ?)"); 

    // Remplazamos los placeholder '?' con los valores que queremos usar
        // Una S por placeholder que tengamos
        // s = string
        // i = integer
        // d = double

    $statement->bind_param('ssi', $id, $nombre, $edad);
    $id = NULL;

    if( isset( $_GET['nombre']) && isset( $_GET['edad']) ){ // ---> Comprobamos que hay valores ingresados
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    $statement->execute(); // ---> Ejecuta nuestro código

    // ---> Comprobando si hubo cambios con la consulta
    if($conexion->affected_rows >= 1){ // ---> Muestra cantidad de filas agregadas
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }else{
        echo 'No se agregó nada';
    }   
}

?>