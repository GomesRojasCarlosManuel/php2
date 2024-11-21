<?php
    function edad($fecha_nac){
        //
        $dia=date("j");
        $mes=date("n");
        $anno=date("Y");
        //descomponer fecha de nacimiento
        $anno_nac=substr($fecha_nac,0,4);
        $mes_nac=substr($fecha_nac,5,2);
        $dia_nac=substr($fecha_nac,8,2);
        //
        if ($mes_nac>$mes) {
            $calc_edad= $anno-$anno_nac-1;
        }else {
            if ($mes==$mes_nac AND $dia_nac>$dia) {
                $calc_edad=$anno-$anno_nac-1;
            } else {
                $calc_edad=$anno-$anno_nac;
            }
            
        }
        return $calc_edad;
    }
    print "Actualmente tengo ".edad("1995-02-10")." años";
?>