<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lee directorio</title>
</head>
<body>
<?php
if (isset($_GET["a"])) {
    $foto = $_GET["a"];
    print "¿Seguro que desea borrar el archivo " . $foto . "?<br>";
    print "Una vez borrado no se podrá recuperar<br>";
    print "<img src='dioses/" . $foto . "' width='200px' height='200px'><br>";
    print "<a href='elimina.php?a=" . $foto . "'>Sí</a>&nbsp;";
    print "<a href='tabla.php'>No</a>";
}
?>
</body>
</html>
