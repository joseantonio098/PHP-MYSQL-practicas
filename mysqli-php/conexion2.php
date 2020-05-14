<?php 

//Establecemos conexión a la base de datos
$conexion = new mysqli('localhost', 'joseantonio098', '', 'mysqli_practica'); 

if ( $conexion->connect_errno ){ // ---> Comprobar si hay un error con la conexión 

    die('Lo siento hubo un problema con el servidor');

} else {

    $id = isset($_GET['id']) ? $_GET['id'] : 1; // ---> Insertando 'ID' de forma dinámica

    $sql = "SELECT * FROM usuarios WHERE ID = $id";
    $resultado = $conexion->query($sql);  // ---> Ejecutamos la conexión(Consulta)

    // ---> Mostrando resultados en pantalla de la base de datos
    if( $resultado->num_rows ){ // ---> Muestra el Número de filas  

        while( $fila = $resultado->fetch_assoc() ){
            echo $fila['ID'];
        }

    } else {
        echo 'No hay datos';
    }
}

?>