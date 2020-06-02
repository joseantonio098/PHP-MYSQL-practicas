<?php session_start();

    if( isset($_SESSION['nick']) ){
        require 'views/contenido.view.php';
    } else {
        header('Location: login.php');
    }

?>