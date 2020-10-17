<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba - AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <section>
        <form action="">
            <label for="nombre">
                <span>Nombre</span>
                <input type="text" id="nombre" placeholder="Nombre">
            </label>

            <label for="apellido">
                <span>Apellido</span>
                <input type="text" id="apellido" placeholder="Apellido">
            </label>

            <label for="edad">
                <span>Edad</span>
                <input type="text" id="edad" placeholder="edad">
            </label>

            <button type="button" id="enviar">Enviar</button>
        </form>
    </section><br><br>

    <div id="respuesta"></div>

</body>

    <script>
        $('#enviar').click(function(){

            let nombre = document.getElementById('nombre').value;
            let apellido = document.getElementById('apellido').value;
            let edad = document.getElementById('edad').value;

            let ruta = "Nom="+nombre+"&Ape="+apellido+"&Ed="+edad;

            $.ajax({
                url: 'back.php',
                type: 'POST',
                data: ruta,
            })
            .done(function(res){
                $('#respuesta').html(res)
            })
        });


    </script>

</html>