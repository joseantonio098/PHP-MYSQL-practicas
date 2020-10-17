<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
    <style>
        h1{
            text-align: center;
        }
        .cont-idioma{
            display: flex;
            justify-content: center;
        }
        img{
            width: 100px;
            height: 70px;
            margin: 0px 20px;
        }
    </style>
</head>
<body>
    <?php
    //Redirecciona según el valor seleccionado 
    if( isset($_COOKIE['idioma_seleccionado']) ){

        if($_COOKIE['idioma_seleccionado'] == 'es'){
        header('Location: espanol.php');
        }else if($_COOKIE['idioma_seleccionado'] == 'en'){
        header('Location: ingles.php');
        }
    }

    ?>
    <h1>Selecciona tu idioma:</h1>
    <div class="cont-idioma">
        <a href="creaCookie.php?idioma=es"><img src="img/espanol.png" alt=""></a>
        <a href="creaCookie.php?idioma=en"><img src="img/ingles.png" alt=""></a>
    </div>
</body>
</html>