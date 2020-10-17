<?php

//Creamos la cookie y su valor lo obtenemos por GET
setcookie("idioma_seleccionado",$_GET['idioma'],time() + 60);
header('Location: ver_cookie.php');


?>