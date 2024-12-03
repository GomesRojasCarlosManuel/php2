<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'ie_database');

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND rol = 'lectura'");
$query->bind_param("s", $usuario);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (hash('sha256', $password) === $user['password']) {
        echo "Éxito <br>Acceso permitido - Lectura.";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Fracaso <br>Usuario no encontrado o sin permisos.";
}

$conn->close();
?>
