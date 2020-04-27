<?php

    if( isset($_COOKIE['font-size']) ){
        $tamaño = htmlspecialchars($_COOKIE['font-size']);  // Accedemos a la cookie creada en la pag. anterior
    } else {
        $tamaño = '15px';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Texto </title>
    <!-- Inyectando php en Css -->
    <style>
        p{
            font-size: <?php echo $tamaño; ?>
        }
    </style>
</head>
<body>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    Quo, quasi tempore sed quidem quibusdam aut reiciendis
    fugit! Illum, reprehenderit facilis!</p>
</body>
</html>