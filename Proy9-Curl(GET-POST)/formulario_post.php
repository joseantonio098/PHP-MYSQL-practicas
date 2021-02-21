<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curl_POST</title>
</head>
<body>
    <form action="curl_post.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="titulo"><br><br>
        <input type="number" name="expiracion" placeholder="tiempo"><br><br>
        <input type="file" name="imagen"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>