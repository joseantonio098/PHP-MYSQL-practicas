<?php
session_start(); //Agregar en toda las páginas de Sesión 

$_SESSION['nombre'] = 'José Antonio';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sesiones </title>
</head>
<body>
    <h1> Página de inicio </h1><br>
    <a href="pagina2.php"> Ir a la página 2 </a>
    
</body>
</html>