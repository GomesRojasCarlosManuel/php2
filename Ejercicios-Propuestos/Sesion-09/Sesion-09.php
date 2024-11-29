<?php
// Definimos el archivo de datos
define('USER_FILE', 'users.txt');

/**
 * Asegura que el archivo de usuarios exista.
 * Si no existe, lo crea usando `touch`.
 */
function ensureFileExists() {
    if (!file_exists(USER_FILE)) {
        touch(USER_FILE); // Crea un archivo vacío
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

/**
 * Valida las credenciales de un usuario.
 *
 * @param string $username Nombre de usuario
 * @param string $password Contraseña del usuario
 * @return string Mensaje de éxito o error
 */
function validateUser($username, $password) {
    ensureFileExists();

    // Leer el archivo línea por línea
    $file = fopen(USER_FILE, 'r');
    if ($file) {
        while (($line = fgets($file)) !== false) { // Leer línea por línea
            list($storedUser, $storedHash) = explode(':', trim($line));
            if ($storedUser === $username && password_verify($password, $storedHash)) {
                fclose($file);
                return "Inicio de sesión exitoso.";
            }
        }
        fclose($file);
        return "Nombre de usuario o contraseña incorrectos.";
    } else {
        return "Error: No se pudo abrir el archivo para lectura.";
    }
}

// Ejemplo de uso
echo registerUser('juan', '123456'); // Registrar usuario
echo "\n";
echo validateUser('juan', '123456'); // Validar usuario
?>
