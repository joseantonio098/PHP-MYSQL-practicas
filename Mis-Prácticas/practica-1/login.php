<?php session_start();

if(isset( $_SESSION['nick'] )){
    header('Location: index.php');
    die();
}


$error = '';
if( isset($_POST['submit']) ){

    $nick = $_POST['nick'];
    if( !empty($nick) ){
        $nick = trim($nick);
        $nick = htmlspecialchars($nick);
        $nick = filter_var($nick, FILTER_SANITIZE_STRING);
    }else{
        $error .= 'Por favor ingrese su usuario <br>';
    }

    $password = $_POST['password'];
    if( empty($password) ){
        $error .= 'Por favor ingrese su contraseña';
    }

    if( empty($error) ){
        try{// Relacionando con la Base de datos
            $conexion = new PDO('mysql:host=localhost;dbname=data_usuarios', 'joseantonio098', '');

            // Traemos los datos de nuestra base de datos
            $consulta = $conexion->prepare('SELECT * FROM usuarios WHERE (correo = :correo OR usuario = :usuario) AND contrasena = :pass');
            $consulta->execute(array( ':correo' => $nick, ':usuario' => $nick, ':pass' => $password ));
            
            $resultados = $consulta->fetch(); // Comprobamos si ya existe el usuario/correo en la base de datos
            
            if(!empty($resultados)){
                $_SESSION['nick'] = $nick;
                header('Location: index.php');
            }else{
                $error = 'Los datos ingresados no existen';
            }
            
        
        }catch(PDOException $e){
            // Error ---> Se ejecutará si encuentra errores
            echo 'Error: '. $e->getMessage();
        }
    }
    
}

require 'views/login.view.php';
?>