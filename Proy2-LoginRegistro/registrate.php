<?php session_start();

    //Si tiene un usuario ingresado, entonces redireccionalo al index
    if( isset($_SESSION['usuario']) ){
        header('Location: index.php');
        die();
    }

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        $usuario = filter_var( strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $conf_password = $_POST['password2'];
        
        $errores = '';

        // Validando Formulario de registro
        if( empty($usuario) or empty($password) or empty($conf_password) ){
            $errores = '<li> Por favor rellena todo los datos correctamente </li>';
        } else {

            try{
                $conexion = new PDO('mysql:host=localhost;dbname=php_practicas', 'joseantonio098', '');
                $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');      
                
                $statement->execute( array(':usuario' => $usuario) ); //Ejecutamos la conexión
                $resultado = $statement->fetch();  //Traerá 2 resultados --> (false/1 dato)

                //Comprobar que el usuario registrado ya existe en la base datos
                if($resultado !== false){ //Si mi resultado trae valores entonces....
                    $errores .= '<li> El nombre de usuario ya existe </li>';
                }
                
                //Verificando que las contraseñas coincidan
                if($password !== $conf_password){
                    $errores .= '<li> Las contraseñas no coinciden </li>';
                }

                //Encriptando las contraseñas --> (Seguridad)
                $password = hash('sha512', $password);
                $conf_password = hash('sha512', $conf_password);

                //Almacenamos los datos de registro en la base de datos
                if( empty($errores) ){
                    $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, contrasena) VALUES(null, :usuario, :contrasena)');
                    $statement->execute(array(':usuario' => $usuario, ':contrasena' => $password));

                    header('Location: login.php'); 
                }
            
            }catch(PDOException $e){
                echo 'Error: '. $e->getMessage();
            }

        }
    }

require 'views/registrate.view.php';
?>