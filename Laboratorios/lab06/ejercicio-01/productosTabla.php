<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Productos</title>
    <?php
        include("conn.php");
        $q="SELECT * FROM productos ";
        $r=mysqli_query($link, $q);
    ?>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>SKU</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Departamento</th>
            <th>Borrar</th>
            <th>Modificar</th>
        </tr>
        <?php
            while ($obj = mysqli_fetch_object($r)) {
                print "<tr>";
                print "<td>" .$obj->id. "</td>";
                print "<td>" .$obj->numero. "</td>";
                print "<td>" .$obj->descripcion. "</td>";
                print "<td>" .number_format($obj->precio,0). "</td>";
                print "<td>" .$obj->stock. "</td>";
                print "<td>" .$obj->depto. "</td>";
                print "<td>Borrar</td>";
                print "<td>Modificar</td>";
                print "</tr>";
            }
        ?>
    </table>
    <br>
    <form action="productoAlta.php" method="post">
        <input type="submit" value="Nuevo Articulo" name="nuevo"/>
    </form>
</body>
</html>