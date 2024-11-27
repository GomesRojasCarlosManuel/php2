<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Numero de visitas</title>
<?php
$arch = "contador.txt";
touch($arch );
$archID = fopen( $arch, "r" ); 
$linea = fgets( $archID, 1024 ); 
fclose($archID );
if( strlen($linea) == 0 ) { 
    $contador = 0;
} else {
    $contador =(integer) $linea;
}
$contador++;
$archID = fopen($arch, "w" ); 
fwrite( $archID, $contador);
fclose($archID );
print "Esta página tiene ".$contador." visitas";
?>
</head>
<body>
</body>
</html>