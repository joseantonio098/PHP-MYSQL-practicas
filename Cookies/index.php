<?php
// ---> para añadir Cookie --->  setcookie( Nombre / Valor / Tiempo de Vida / Ruta );
    setcookie('font-size', '50px', time() + 60 * 60 * 24 * 30, '/');
    //Si queremos remover la fecha, ----> time() - ....;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookies </title>
</head>
<body>
    <h1> Cookie Seteada </h1>
</body>
</html>