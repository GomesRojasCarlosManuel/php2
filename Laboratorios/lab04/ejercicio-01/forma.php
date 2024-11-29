<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de visitas</title>
</head>
<body>
    <p>Registrate a nuestro boletín mensual</p>
    <form action="graba.php" method="post" >
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" ></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" ></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><input type="text" name="correo" ></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td><input type="submit" name="envia" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>