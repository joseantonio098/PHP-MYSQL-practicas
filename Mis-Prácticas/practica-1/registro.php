<?php session_start();

if( isset($_SESSION['nick']) ){
    header('Location: index.php');
    die();
}


$error = '';
if( isset($_POST['submit']) ){

    // Validando Nombre
    $nombre = $_POST['nombre'];
    if( !empty($nombre) ){
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $error .= 'Por favor ingrese su nombre <br>';
    }

    // Validando Correo
    $correo = $_POST['correo'];
    if( !empty($correo) ){
        if( !filter_var($correo, FILTER_VALIDATE_EMAIL) ){
            $error .= 'Por favor ingrese un correo válido <br>';
        }
        $correo = trim($correo);
        $correo = htmlspecialchars($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    }else{
        $error .= 'Por favor ingrese su correo <br>';
    }

    // Validando Usuario
    $usuario = $_POST['usuario'];
    if( !empty($usuario) ){
        $usuario = trim($usuario);
        $usuario = htmlspecialchars($usuario);
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
    }else{
        $error .= 'Por favor ingrese un usuario <br>';
    }

    // Validando Contraseña
    $contrasena = $_POST['password'];
    if( !empty($contrasena) ){
        $contrasena = trim($contrasena);
        $contrasena = htmlspecialchars($contrasena);
        $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING);
    }else{
        $error .= 'Por favor ingrese una password';
    }

    
    if( empty($error) ){
        try{// Relacionando con la Base de datos
            $conexion = new PDO('mysql:host=localhost;dbname=data_usuarios', 'joseantonio098', '');

            // Traemos los datos de nuestra base de datos
            $consulta = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo OR usuario = :usuario LIMIT 1');
            $consulta->execute(array(':correo' => $correo, ':usuario' => $usuario ));
            
            $resultados = $consulta->fetch(); // Comprobamos si ya existe el usuario/correo en la base de datos

            if(!empty($resultados)){
                $error = 'El usuario usuario o correo ingresado ya existe';
            }else{
                // Ingresamos los datos a la base de datos
                $consulta = $conexion->prepare('INSERT INTO usuarios (id, nombre, correo, usuario, contrasena) VALUES(null, :nombre, :correo, :usuario, :contrasena)'); // ---> Establecemos la consulta
                $consulta->execute(array(':nombre' => $nombre, ':correo' => $correo, ':usuario' => $usuario, ':contrasena' => $contrasena)); // ---> Ejecutamos la consulta             
                header('Location: login.php');                      
            }
            
        
        }catch(PDOException $e){
            // Error ---> Se ejecutará si encuentra errores
            echo 'Error: '. $e->getMessage();
        }
    }


}


require 'views/registro.view.php';
?>