<?php session_start();

if( isset($_SESSION['nick'] ) ){ //Si tiene una cuenta de usuario entonces muestrale el contenido

    header('Location: contenido.php');
    
}else{

    header('Location: login.php');
    die();
}


?>