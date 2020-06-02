<?php

    // Devuele el nombre del archivo + extensión  ---->  "documento.txt"
    echo pathinfo('documento.txt', PATHINFO_BASENAME); 
    
    // Devuele la extensión del archivo  ---->  "txt"
    echo pathinfo('documento.txt', PATHINFO_EXTENSION);

    // Devuelve el nombre del archivo  ---->  "documento"
    echo pathinfo('documento.txt', PATHINFO_FILENAME);

    // Devuele el directorio padre del archivo  ---->  "carpeta/archivo"
    echo pathinfo('carpeta/archivo/documento.txt', PATHINFO_DIRNAME);

    // Devuelve todo los archivos con extensión php
    $resultado = glob('*.php');
    print_r($resultado);

    // Devuelve todo los archivos con extensiónes predeterminadas
    $resultado = glob('*.{php,html,txt,jpg}', GLOB_BRACE);
    print_r($resultado);

    // Permite acceder al archivo principal ----> archivo
    echo basename('carpeta1/carpeta2/archivo.php','.php');

    // Devuele el directorio padre del archivo  ---->  "carpeta1/carpeta2"    
    echo dirname('carpeta1/carpeta2/archivo.php');

?>