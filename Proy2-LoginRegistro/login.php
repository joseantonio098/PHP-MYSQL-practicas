<?php session_start();

//Si tiene un usuario ingresado, entonces redireccionalo al index
if( isset($_SESSION['usuario']) ){
    header('Location: index.php');
    die();
}

$errores = '';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

    $usuario = filter_var( strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=php_practicas', 'joseantonio098', '');
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena');      
            
        $statement->execute( array(':usuario' => $usuario, ':contrasena' => $password) ); //Ejecutamos la conexión
        $resultado = $statement->fetch();  

        if( $resultado !== false ){
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        }else{
            $errores .= '<li> Datos incorrectos </li>';
        }
        
    }catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
}


require 'views/login.view.php';
?>