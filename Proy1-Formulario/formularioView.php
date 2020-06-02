<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> formulario </title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <!-- Value=" " permite que los datos se almacenen en los Inputs -->
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" 
            value="<?php if($enviado == '' && isset($nombre)) echo $nombre ?>">


            <input type="text" class="form-control" name="correo" placeholder="Correo:" 
            value= "<?php if($enviado == '' && isset($correo)) echo $correo ?>">

            <textarea name="mensaje" class="form-control" placeholder="Mensaje: "><?php if($enviado == '' && isset($mensaje))
            echo $mensaje ?></textarea>


                <!-- Mostrando los errores y el enviado -->
                <?php if(!empty($errores)) : ?> <!-- Si errores no está vacio entonces ....-->
                    <div class="alert error"> 
                        <?php echo $errores ?>
                    </div>
                <?php elseif($enviado !== '') : ?> <!-- Si enviado no está vacio entonces ....-->
                    <div class="alert success">
                      <li> Enviado Correctamente </li>
                    </div>
                <?php endif; ?>

            <input type="submit" name="submit" value="Enviar Correo" class="btn btn-primary">
        </form>
    </div>

</body>
</html>