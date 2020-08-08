<?php
    //Indicamos que se trata de un archivo JSON
    header('Content-type: application/json; charset=utf-8');
    
    // Creamos nuestro arreglo asociativo --> convertimos a JSON
    $respuesta = [
        [
            'id' => '5f2b8f29048586ba1dfc9084',
            'nombre' => 'Lilly Webster',
            'edad' => '25',
            'pais' => 'Perú',
            'correo' => 'Lilly@hotmail.com'
        ],
        [
            'id' => '5f2b8f29048586ba1dfc9084',
            'nombre' => 'Ximena Laura',
            'edad' => '35',
            'pais' => 'Perú',
            'correo' => 'Ximena@hotmail.com'
        ]
    ];
    
    // Covertimos el arreglo asociativo en un JSON
    echo json_encode($respuesta);

?>