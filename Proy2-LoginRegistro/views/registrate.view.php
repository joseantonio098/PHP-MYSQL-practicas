<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registrate </title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!------------ CREANDO LA PÁGINA DE REGISTRO ------------>
    <div class="contenedor">
        <h1 class="titulo"> Registrate </h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password"
                placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password-btn"
                placeholder="Repetir Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if( !empty($errores) ) : ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>


        <p class="texto-registrate">
            ¿ Ya tienes cuenta ?
            <a href="login.php"> Iniciar Sesión </a>
        </p>
    </div>
    
    <script src="fontawesome/css/all.min.js"></script>
</body>
</html>