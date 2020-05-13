<!-- Versión antigua para conectar una Base de datos a php -->
<?php

// Establecemos la conexión
$conexion = mysql_connect('localhost', 'joseantonio098', '') or die('No se pudo conectar a la bd');

// Indicamos nuestra base de datos
mysql_select_db('heidisql', $conexion);

$resultados = mysql_query('SELECT * FROM usuarios'); // Hacer consultas

$fila = mysql_fetch_object($resultados);// Traer resultados como objeto

echo $fila->nombre;// Accedemos a los datos

?>