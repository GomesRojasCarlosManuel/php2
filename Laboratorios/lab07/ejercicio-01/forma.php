<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sube imagen</title>
    <?php
        if (isset($_FILES['foto'])) {
            if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
                $foto=time()."jpg";
                copy($_FILES['foto']['tmp_name'], "dioses/$foto");
                header("location:tabla.php");
            }
        }
    ?>
</head>
<body>
    <h2>Subir una imagen</h2>
    <form action="forma.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Imagen</td>
                <td><input type="file" name="foto" id="foto"/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="enviar" id="enviar" value="Enviar"/></td>
            </tr>
        </table>
    </form>
</body>
</html>