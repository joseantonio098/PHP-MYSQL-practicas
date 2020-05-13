<?php 

    $error = '';
    $enviar = '';

    if(isset($_POST['enviar'])){

        $nombre = $_POST['nombre'];
        if( !empty($nombre) ){
            $nombre = htmlspecialchars($nombre);
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }else{
            $error .= '<li>Por favor ingrese un Nombre </li><br>';
        }

        $correo = $_POST['correo'];
        if( !empty($correo) ){

            $correo = htmlspecialchars($correo);
            $correo = trim($correo);
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            if( !filter_var($correo, FILTER_VALIDATE_EMAIL) ){
                $error .= '<li>Por favor ingrese un Correo Válido</li> <br>';
            }
        }else{
            $error .= '<li>Por favor ingrese un Correo</li> <br>';
        }

        $asunto = $_POST['asunto'];
        if( !empty($asunto) ){
            $asunto = htmlspecialchars($asunto);
            $asunto = trim($asunto);
            $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
        }else{
            $error .= '<li>Por favor ingrese un Asunto</li> <br>';
        }

        $mensaje = $_POST['mensaje'];
        if( !empty($mensaje) ){
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        }else{
            $error .= '<li>Por favor ingrese un Mensaje</li>';
        }

        if($error == ''){   
            $enviar_a = 'joseantoniovalen1@gmail.com';
            $asunto_envio = $asunto;
            $mensaje_preparado = 'De:' . $nombre . '\n';
            $mensaje_preparado .= 'Correo:' . $correo . '\n';
            $mensaje_preparado .= 'Mensaje:' . $mensaje;

            mail($enviar_a, $asunto_envio, $mensaje_preparado); 
            $enviar = 'Texto Activado';
        }

    }



   require 'formulario_info.php';

?>

