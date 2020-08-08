<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Galería </title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>

        <div class="contenedor">
            <h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])){
                echo $foto['titulo']; //Trae el título de la foto
            }else{
                echo $foto['imagen'];
            }?></h1>
        </div>

    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php  echo $foto['imagen']  ?>" alt=""> <!-- Trae la imagen -->
            <p class="texto"> <?php  echo $foto['texto']  ?></p> <!-- Trae la descripción -->
            <a href="index.php" class="regresar"> Regresar </a>
        </div>
    </div>

    <footer>
        <p class="copyright"> Galería creada por José Valencia - Diwprog </p>
    </footer>

</body>
</html>