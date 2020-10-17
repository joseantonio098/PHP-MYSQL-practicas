<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookies </title>
</head>
<body>
    <?php 
        setcookie("prueba","Valor almacenado en la cookie!!", time() + 5, "/PHP-practicas/Cookies/cookie_pract/leer_cookie.php");
    
    ?>
    
</body>
</html>