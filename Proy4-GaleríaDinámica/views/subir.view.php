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
            <h1 class="titulo"> Subir foto </h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            
            <label for="foto"> Selecciona tu foto </label>
            <input type="file" id="foto" name="foto">

            <label for="titulo"> Título de la foto </label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto"> Descripción: </label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

            <input type="submit" value="Subir Foto" class="submit">


        </form>
    </div>

    <footer>
        <p class="copyright"> Galería creada por José Valencia - Diwprog </p>
    </footer>
    
</body>
</html>