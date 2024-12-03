<?php
// Configuración de la base de datos
$host = 'localhost';
$user = 'root';  // Cambia esto si tienes un usuario diferente
$password = '';  // Cambia esto si tienes una contraseña
$database = 'ie_database';

// Estableciendo la conexión con MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica si la conexión fue exitosa
if (!$conn) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Mensaje opcional (puedes eliminarlo en producción)
//echo 'Conexión exitosa a la base de datos';
?>

