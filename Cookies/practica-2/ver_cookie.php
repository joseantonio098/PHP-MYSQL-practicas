<?php

//Redirecciona según el valor seleccionado 
if(!$_COOKIE['idioma_seleccionado']){
    header('Location: idioma.php');
}else if($_COOKIE['idioma_seleccionado'] == 'es'){
    header('Location: espanol.php');
}else if($_COOKIE['idioma_seleccionado'] == 'en'){
    header('Location: ingles.php');
}

?>