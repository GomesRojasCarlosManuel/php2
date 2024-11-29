<?php
// Mostrar todos los errores de PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Definimos el archivo de datos
define('USER_FILE', 'users.txt');

/**
 * Asegura que el archivo de usuarios exista.
 * Si no existe, lo crea usando `touch`.
 */
function ensureFileExists() {
    if (!file_exists(USER_FILE)) {
        touch(USER_FILE); // Crea un archivo vacío si no existe
    }
}

/**
 * Registra un nuevo usuario en el archivo.
 *
 * @param string $username Nombre de usuario
 * @param string $password Contraseña del usuario
 * @return string Mensaje de éxito o error
 */
function registerUser($username, $password) {
    ensureFileExists();

    // Leer todos los usuarios para evitar duplicados
    $existingUsers = file(USER_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($existingUsers as $user) {
        list($storedUser, $storedHash) = explode(':', $user);
        if ($storedUser === $username) {
            return "El usuario ya está registrado.";
        }
    }

    // Escribir el nuevo usuario (hash para mayor seguridad)
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $file = fopen(USER_FILE, 'a');
    if ($file) {
        fwrite($file, "$username:$passwordHash\n");
        fclose($file);
        return "Usuario registrado exitosamente.";
    } else {
        return "Error: No se pudo abrir el archivo para escritura.";
    }
}

$registerMessage = "";

// Manejo del formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $registerMessage = registerUser($username, $password);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 320px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Usuario</h2>

        <!-- Formulario de registro -->
        <form action="register.php" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Nombre de usuario" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Registrar</button>
            </div>
        </form>

        <!-- Mensaje de registro -->
        <div class="message">
            <?php echo $registerMessage; ?>
        </div>
    </div>
</body>
</html>
