<?php

require 'function.php';

$fotos_por_pagina = 8;

// retorna la pagina actual o la página 1;
$pagina_actual = (isset($_GET['p']) && (int)$_GET['p'] >= 0 ? (int)$_GET['p'] : 1);

$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

// Establecemos la conexión
$conexion = conexion('galeria_practica','joseantonio098','');
if(!$conexion){
    die();
    //Se recomienda redireccionar a una pagina de error --> 404..
}
// ------------------Primera consulta (Trae el array de fotos con un rango establecido)
$statement = $conexion->prepare(
    "SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina"
);

$statement->execute();
$fotos = $statement->fetchAll(); // Arreglo de fotos IMPORTANTE!!

// Si no hay fotos ingresadas entonces....
if(!$fotos){
    header('Location: index.php');
}


// ------------------Segunda consulta (Trae total de paginas)
$statement = $conexion->prepare("SELECT FOUND_ROWS() AS total_filas");// Trae toda las filas(img)
$statement->execute();

$total_post = $statement->fetch()['total_filas'];
$total_paginas = ceil($total_post / $fotos_por_pagina);



require 'views/index.view.php';
?>