<?php 

//Establecemos conexión a la base de datos
$conexion = new mysqli('localhost', 'joseantonio098', '', 'mysqli_practica'); 

if ( $conexion->connect_errno ){ // ---> Comprobar si hay un error con la conexión 

    die('Lo siento hubo un problema con el servidor');

} else {

    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion->query($sql);  // ---> Ejecutamos la conexión(Consulta)

    // ---> Mostrando resultados en pantalla de la base de datos
    if( $resultado->num_rows ){ // ---> Muestra el Número de filas  

        $dato = $resultado->fetch_assoc(); // ---> Devuelve una fila 

        echo $dato['nombre'];

    } else {
        echo 'No hay datos';
    }
}


?>