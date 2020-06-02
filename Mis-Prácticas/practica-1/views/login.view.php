<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="contenedor">
        <div class="cont-form">
            <div class="titulo-registro">
                <h2> Iniciar Sesión </h2>
            </div>
            <form action="" method="post" class="formulario">
        
                <div class="input">
                    <input type="text" name="nick" placeholder="Correo / Usuario" class="form-imp" value="">
                </div>
                <div class="input">
                    <input type="password" name="password" placeholder="Contraseña" class="form-imp" value="">
                </div>
                
                <div class="errores">
                    <?php if($error !== '') :?>
                        <div class="error">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <input type="submit" value="Enviar" name="submit">
        
            </form>

            <div class="log-reg">
                <a href="registro.php"> Registro </a>
                <a href="login.php"> Login </a>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>