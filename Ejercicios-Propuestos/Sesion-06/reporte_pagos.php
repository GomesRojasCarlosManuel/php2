<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Pagos de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .total {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>

    <h1>Reporte de Pagos de los Estudiantes</h1>

    <?php
    /* Explicación:
    1-Revisar el directorio:

    Se verifica si existe el directorio datos.
    Se abre y se lista el contenido usando readdir().
    
    2-Filtrar archivos:

    Identifica archivos con extensión .csv y los procesa.

    3-Procesar pagos:

    Lee cada archivo CSV, ignorando encabezados y líneas vacías.
    Almacena los pagos en un array $pagosTotales.
    
    4-Generar reporte:

    Muestra los pagos en una tabla HTML.
    Calcula el total pagado y lo muestra al final.*/

    $directorio = "./datos";

    if (is_dir($directorio)) {
        echo "<p>Procesando pagos desde el directorio <strong>'$directorio'</strong>.</p>";

        $dirID = opendir($directorio);
        $pagosTotales = [];

        while (($nombre = readdir($dirID)) !== false) {
            $rutaArchivo = $directorio . '/' . $nombre;

            if (is_file($rutaArchivo) && pathinfo($rutaArchivo, PATHINFO_EXTENSION) == 'csv') {
                if (($handle = fopen($rutaArchivo, "r")) !== FALSE) {
                    while (($datos = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        if (count($datos) < 4 || strtolower($datos[0]) == 'id') continue;

                        $pagosTotales[] = [
                            'id' => $datos[0],
                            'nombre' => $datos[1],
                            'monto' => floatval($datos[2]),
                            'fecha' => $datos[3]
                        ];
                    }
                    fclose($handle);
                }
            }
        }
        closedir($dirID);

        if (!empty($pagosTotales)) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Monto Pagado</th><th>Fecha</th></tr>";

            $totalPagado = 0;
            foreach ($pagosTotales as $pago) {
                echo "<tr>";
                echo "<td>{$pago['id']}</td>";
                echo "<td>{$pago['nombre']}</td>";
                echo "<td>$" . number_format($pago['monto'], 2) . "</td>";
                echo "<td>{$pago['fecha']}</td>";
                echo "</tr>";
                $totalPagado += $pago['monto'];
            }

            echo "<tr>";
            echo "<td colspan='2' class='total'>Total Pagado</td>";
            echo "<td colspan='2' class='total'>$" . number_format($totalPagado, 2) . "</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "<p>No se encontraron pagos para procesar.</p>";
        }
    } else {
        echo "<p>El directorio <strong>'$directorio'</strong> no existe.</p>";
    }

    ?>

</body>
</html>
