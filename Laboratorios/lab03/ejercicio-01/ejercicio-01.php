<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lee directorio</title>
</head>
<body>
<?php
$dir = opendir("dioses");
$numRen = 3;
if ($dir) {
    print "<table border='1'>";
    $i = 0;
    while ($foto = readdir($dir)) {
        if ($foto != "." && $foto != "..") {
            print "<tr>";
            print "<td>";
            print $foto;
            print "</td>";
            print "<td>";
            print "<img src='dioses/$foto' width='100px' height='100px'>";
            print "</td>";
            print "<td>";
            print "<a href='borrar.php?a=$foto'>Borrar</a>";
            print "</td>";
            print "</tr>";
        }
    }
    print "</table>";
} else {
    print "Error al tratar de abrir la carpeta 'fotos'";
}
?>
</body>
</html>
