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
            <h1 class="titulo"> Mi increible galeria en php y mysql </h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">

             <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                    </a>
                </div>
             <?php endforeach; ?>
            

            <div class="paginacion">
                <?php if($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1 ?>" class="izquierda"> Página Anterior </a>
                <?php endif; ?>    

                <?php if($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha"> Página Siguiente </a>
                <?php endif; ?>
            </div>
            
        </div>
    </section>

    <footer>
        <p class="copyright"> Galería creada por José Valencia - Diwprog </p>
    </footer>

</body>
</html>