<?php 
    $errores = '';
    $enviado = '';

    if(isset($_POST['submit'])){
        //Declaración de variables
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        //Validar Nombre
        if(!empty($nombre)){
            $nombre = trim($nombre);    
            $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
        }else{
            $errores .= '<li>Porfavor ingrese un Nombre </br></li>';
        }

        //Validar Correo
        if(!empty($correo)){
            $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);

            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                $errores .= '<li>Ingrese un correo Válido </br></li>';
            }
        }else{
            $errores .= '<li>Porfavor ingrese un Correo </br></li>';
        }

        //Validar Mensaje
        if(!empty($mensaje)){
            $mensaje = trim($mensaje);
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = filter_var($mensaje,FILTER_SANITIZE_STRING);
        }else{
            $errores .= '<li>Porfavor ingrese un Mensaje</li>';
        }


        //Si no hay errores -----> Ejecuta lo siguiente:
        if($errores == ''){
            $enviar_a = 'tuNombre@tuEmpresa.com';
            $asunto = 'Correo enviado desde mi página.com';
            $mensaje_preparado = 'De:' . $nombre . '\n';
            $mensaje_preparado .= 'Correo:' . $correo . '\n';
            $mensaje_preparado .= 'Mensaje:' . $mensaje;
            // mail($enviar_a, $asunto, $mensaje_preparado); //Permite que el correo se envíe
            $enviado = 'Texto Activado';
        }


    }

    require 'formularioView.php'; //Vinculamos la pag de ----> 'formularioView'
?>
