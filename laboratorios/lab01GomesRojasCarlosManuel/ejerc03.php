<?php
    function comprasTotales($monto){
        $salida="no hay compras";
        if ($monto>0) {
            $salida= sprintf("$%.2f compras", $monto);
        }
        return $salida;
    }
    $monto=0;
    print comprasTotales($monto);
?>