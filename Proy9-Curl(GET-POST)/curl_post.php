<?php
// Conectar con la API (ImgBB) --> Página para subir img
    $key = "b98ddd9a95f263266ed4bc32fe6a444c";  // obtener de ImgBB
    $api = "https://api.imgbb.com/1/upload";  // obtener de ImgBB

    $titulo = $_POST['titulo'];
    $expiracion = $_POST['expiracion'];

    $imagen = $_FILES['imagen'];
    $contenidoImg = file_get_contents($imagen['tmp_name']);  //Obtenemos la ruta de nuestra IMG
    $base64 = base64_encode($contenidoImg); //Codificamos --> requisito de ImgBB

    //Parametros obligatorios para mandar a la API ---> ImgBB
    $post = "key=".urlencode($key)."&image=".urlencode($base64)."&name=".urlencode($titulo)."&expiration=".urlencode($expiracion);


    $ch =   curl_init();
            curl_setopt($ch, CURLOPT_POST, true); //Habilitar opción (Post)
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post); //Envio los parametros
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Retorna información (JSON)

    $resultado = curl_exec($ch); //Ejecutamos
    $json = json_decode($resultado, true);

    echo "<pre>";
    var_dump($json);
    echo "</pre>";

    //------JSON
    /*  array(3) {
        ["data"]=>
        array(11) {
          ["id"]=>
          string(7) "rdBT97d"
          ["title"]=>
          string(11) "Bandera-Per"
          ["url_viewer"]=>
          string(22) "https://ibb.co/rdBT97d"
          ["url"]=>
          string(40) "https://i.ibb.co/TWQpyvW/Bandera-Per.jpg"
          ["display_url"]=>
          string(40) "https://i.ibb.co/TWQpyvW/Bandera-Per.jpg"
          ["size"]=>
          int(12984)
          ["time"]=>
          string(10) "1603471101"
          ["expiration"]=>
          string(1) "0"
          ["image"]=>
          array(5) {
            ["filename"]=>
            string(15) "Bandera-Per.jpg"
            ["name"]=>
            string(11) "Bandera-Per"
            ["mime"]=>
            string(10) "image/jpeg"
            ["extension"]=>
            string(3) "jpg"
            ["url"]=>
            string(40) "https://i.ibb.co/TWQpyvW/Bandera-Per.jpg"
          }
          ["thumb"]=>
          array(5) {
            ["filename"]=>
            string(15) "Bandera-Per.jpg"
            ["name"]=>
            string(11) "Bandera-Per"
            ["mime"]=>
            string(10) "image/jpeg"
            ["extension"]=>
            string(3) "jpg"
            ["url"]=>
            string(40) "https://i.ibb.co/rdBT97d/Bandera-Per.jpg"
          }
          ["delete_url"]=>
          string(55) "https://ibb.co/rdBT97d/a686384639a1e49f70f9946a31698e8d"
        }
        ["success"]=>
        bool(true)
        ["status"]=>
        int(200)
      }
    */







?>