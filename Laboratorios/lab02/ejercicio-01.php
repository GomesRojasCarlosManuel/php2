<?php
    /*La misma compañía de comercio electrónico para la que desarrollamos el laboratorio anterior, tiene una página
    muy sencilla con su inventario realizado con PHP. Ahora te solicita que le des formato a las cantidades que
    aparecen en la siguiente tabla:    

    print "<table border=´1´>";
    print "<tr><th>Nombre Producto</td><th>Inventario</th><th>Precio
    Unitario</th></tr>";
    print "<tr><td>Producto 1</td><td>1000</td><td>450.00</td></tr>";
    print "<tr><td>Producto 2</td><td>6783</td><td>1450.00</td></tr>";
    print "<tr><td>Producto 3</td><td>25</td><td>2450.00</td></tr>";
    print "<tr><td>Producto 4</td><td>8769</td><td>550.00</td></tr>";
    print "<tr><td>Producto 5</td><td>1324</td><td>6450.00</td></tr>";
    print "</table>";*/

    print "<table border=´1´>";
    print "<tr><th>Nombre Producto</td><th>Inventario</th><th>Precio
    Unitario</th></tr>";
    print "<tr><td>Producto 1</td><td align='right'>".number_format(1000,0)."
    </td><td align='right'>$".number_format(450.00,2)."</td></tr>";
    print "<tr><td>Producto 2</td><td align='right'>".number_format(6783,0)."
    </td><td align='right'>$".number_format(1450.00,2)."</td></tr>";
    print "<tr><td>Producto 3</td><td align='right'>".number_format(25,0)."
    </td><td align='right'>$".number_format(2450.00,2)."</td></tr>";
    print "<tr><td>Producto 4</td><td align='right'>".number_format(8769,0)."
    </td><td align='right'>$".number_format(550.00,2)."</td></tr>";
    print "<tr><td>Producto 5</td><td align='right'>".number_format(1324,0)."
    </td><td align='right'>$".number_format(6450.00,2)."</td></tr>";
?>