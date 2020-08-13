<?php
// 3-----
error_reporting(0);  //Esconde errores
header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

// Validamos las variables(Input)
function validarDatos($nombre,$edad,$pais,$correo){
    if($nombre == ''){
        return false;
    } elseif($edad == '' || is_int($edad)){
        return false;
    } elseif($pais == ''){
        return false;
    } elseif($correo == ''){
        return false;
    }
    return true;
}

if( validarDatos($nombre,$edad,$pais,$correo) == true ){

    // Accedemos a la DATABASE mysqli
    $conexion = new mysqli('localhost','joseantonio098','','ajax');
    $conexion->set_charset('utf8');

    // Comprueba si hay errores
    if($conexion->connect_errno){
        $respuesta = ['error' => true]; //1er error ---> Mala conexión con la DATABASE
    }else{
        $statement = $conexion->prepare(
            "INSERT INTO usuarios(nombre,edad,pais,correo) VALUES(?,?,?,?)");
        $statement->bind_param("siss",$nombre,$edad,$pais,$correo);
        $statement->execute();
        
        // Comprueba si hay filas ingresadas
        if($conexion->affected_rows <= 0){
            $respuesta = ['error' => true]; //2do error ---> No hay filas ingresadas
        }

        $respuesta = []; // Sí no hay errores entonces la $respuesta será vacío(Nulo)
    }

} else {
    $respuesta = ['error' => true]; //3er error ---> Mala validación de datos
}

echo json_encode($respuesta);

?>