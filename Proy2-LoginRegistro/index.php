<?php session_start();

    if( isset($_SESSION['usuario']) ){
        //Si tiene una cuenta de usuario entonces muestrale el contenido
        header('Location: contenido.php');
        die();
    }else{ 
        header('Location: registrate.php');
    }

?>