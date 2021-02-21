<?php

try{

    $conexion = new PDO('mysql:host=localhost;dbname=php_practicas', 'joseantonio098', '');
    
    // ---> Estableciendo la página ingresada
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $postPorPagina = 5;

    // ---> Determina el Nro incial del artículo por página
    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

    // ---> Traemos todo los artículos, donde $inicio es el Nro incial de artículos
    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

    // ---> Ejecutamos consulta
    $articulos->execute();
    $articulos = $articulos->fetchAll(); 

    // ---> Si la página no contiene articulos, redireccionamos a index.php
    if(!$articulos){
        header('Location: index.php');
    }

    // ---> Muestra el total de artículo de la base de datos
    $totalArticulos = $conexion->query('SELECT  FOUND_ROWS() as total');
    $totalArticulos = $totalArticulos->fetch()['total'];

    // ---> Muestra el total de páginas
    $numeroPaginas = ceil($totalArticulos / $postPorPagina);


}catch(PDOException $e){
    echo 'Error: '. $e->getMessage();
    die();
}


require 'index.view.php';

?>