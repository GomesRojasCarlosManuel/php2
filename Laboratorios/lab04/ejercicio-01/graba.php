<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de visitas</title>

    <?php
        $nombre="";
        $apellidos="";
        $correo="";

        if (isset($_POST["nombre"])) {
            $nombre=$_POST["nombre"];
        }

        if (isset($_POST["apellidos"])) {
            $apellidos=$_POST["apellidos"];
        }

        if (isset($_POST["correo"])) {
            $correo=$_POST["correo"];
        }

        $arch="registro.txt";
        touch($arch);
        $dato=$nombre. "*" . $apellidos. "*" . $correo;
        $archID=fopen($arch, "a");
        fwrite($archID,$dato);
        fclose($archID);
    ?>
</head>
<body>
    <p>Gracias por registrarse, pulse <a href="forma.php">aqui</a> para 
    regresar</p>
</body>
</html>