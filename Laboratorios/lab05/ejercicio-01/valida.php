<?php
include("conn.php");

if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    
    if (!empty($usuario) && !empty($clave)) {
        // Consulta para verificar credenciales
        $query = "SELECT * FROM administradores WHERE username='$usuario' AND clave='$clave'";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) > 0) {
            // Credenciales válidas
            echo "Bienvenido al sistema administrativo, $usuario.";
        } else {
            // Credenciales incorrectas
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "Usuario o clave vacíos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>

