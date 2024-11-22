<?php
    function decimales($numero, $busca) {
        $snumero=(string) $numero;
        $comienza=strpos($snumero, $busca);
        if ($comienza===false) {
            $decimales=0;
        } else {
            $decimales=substr($snumero, $comienza+1);
        }
         return $decimales;
    }
    $precio=12345.67;
    print "El precio ".$precio." tiene ".decimales($precio, ".")." centavos";
?>