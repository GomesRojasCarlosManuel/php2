<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
    <?php
        include("conexion.php");
        $q="SELECT * FROM producto ";
        $r=mysqli_query($conexion, $q);
    ?>
</head>
<body>
<h1>Tienda de Abarrotes "El Tío Lolo"</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>nombre producto</th>
            <th>fecha de compra</th>
            <th>precio de compra</th>
            <th>caracteristicas</th>
        </tr>
        <?php
            while ($obj = mysqli_fetch_object($r)) {
                print "<tr>";
                print "<td>" .$obj->id. "</td>";
                print "<td>" .$obj->nombre_producto. "</td>";
                print "<td>" .$obj->fecha_de_compra. "</td>";
                print "<td>" .$obj->precio_de_compra. "</td>";
                print "<td>" .$obj->caracteristicas. "</td>";
                print "</tr>";
            }
        ?>
    </table>
    <br>
</body>
</html>