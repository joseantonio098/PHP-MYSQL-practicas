<?php
    // Verifica si el documento existe ---> (false/true)
    $resultado = file_exists('archivo_n1.txt');
    var_dump($resultado);

    // Obtiene el contenido de un archivo
    echo file_get_contents('archivo_n1.txt');

    // remplaza contenido de un archivo
    file_put_contents('archivo_n1.txt',"");

    // Añade contenido de un archivo 
    file_put_contents('archivo_n1.txt', "\n Añadiendo texto", FILE_APPEND);
     
    // Convierte el contenido por cada fila en un arreglo
    $archivo = file('archivo_n1.txt');
    print_r( $archivo );





?>                                                              