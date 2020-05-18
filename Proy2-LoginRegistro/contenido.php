<?php session_start();
    
    //Condicional para proteger mi contenido
    if( isset($_SESSION['usuario']) ){
        require 'views/contenido.view.php';
    }else{
        header('Location: login.php');
    }
    
?>