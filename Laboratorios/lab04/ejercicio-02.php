<?php
    if (isset($_COOKIE['contador'])) {
        //caduca en un año
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365*24
        *60*60 );
        $mensaje='Usted ha visitado esta pagina '. $_COOKIE['contador']
        ." veces";
    } else {
        //caduca en un año
        setcookie('contador',1,time() +365*24*60*60);
        $mensaje='Bienvenido a nuestra pagina web por primera vez';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <p>
        <?php echo $mensaje; ?>
    </p>
</body>
</html>