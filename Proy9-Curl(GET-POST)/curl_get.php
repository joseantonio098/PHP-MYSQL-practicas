<?php
    //https://www.google.com/search?q=peru

    $buscarInfo = $_POST['buscarTxt'];

    $ch = curl_init("https://www.google.com/search?q=$buscarInfo");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          //curl_setopt --> PARAMETROS(ruta / función(Objetivo) / habilitar(true-false))
          
    $respuesta = curl_exec($ch);
    echo $respuesta;


// --------> Funciones Principales CURL
    //curl_init – Inicia una nueva sesión cURL
    //curl_setopt – Define opciones para nuestra sesion cURL
    //curl_getinfo – Obtiene información de la última transferencia
    //curl_exec – Ejecuta la petición HTTP
    //curl_close – Cierra la sesión cURL
?>