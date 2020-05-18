<?php session_start();

//Permite cerrar la sesión iniciada
session_destroy();

$_SESSION = array(); //Limpiamos la sesión
header('Location: login.php');

?>