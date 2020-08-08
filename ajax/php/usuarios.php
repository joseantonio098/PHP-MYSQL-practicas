<?php
    error_reporting(0); //Esconde errores
    header('Content-type: application/json; charset=utf-8');

    //BASE DE DATOS MYSQLI -> PREPARED STATEMENT
    $conexion = new mysqli('localhost', 'joseantonio098', '', 'ajax');

    if($conexion->connect_errno){
        $respuesta = [
            'error' => true
        ];
    } else {
        $conexion->set_charset("utf8");//Omitir símbolos especiales
        $statement = $conexion->prepare("SELECT * FROM usuarios");
        $statement->execute();

        $resultados = $statement->get_result();

        $respuesta = []; // Almacena los elementos de la DATABASE
        
        // var_dump($resultados->fetch_assoc());  ---> Muestra info. recogida de la DATABASE
        // recorremos todo los datos de la DATABASE
        while($fila = $resultados->fetch_assoc()){
            $usuario = [
                'id'        => $fila['ID'],
                'nombre'    => $fila['nombre'],
                'edad'      => $fila['edad'],
                'pais'      => $fila['pais'],
                'correo'    => $fila['correo'] 
            ];
            array_push($respuesta, $usuario);
        }


    }
    echo json_encode($respuesta);


?>