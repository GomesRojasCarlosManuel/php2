<?php
    function fechaJS($fecha){
        //Recibe fecha en formato ISO (AAAA-MM-DD)
        //Regresa fecha en formato DD/MM/AAAA
        $df=explode( "-", $fecha );
        if (count($df) !=3) {
            $salida="";
        } else {
            // validacion
            if (checkdate($df[1], $df[2], $df[0] ) == false) {
                $salida="";
            } else {
                $salida=$df[2]."/".$df[1]."/".$df[0];
            }
            
        }
        return $salida; 
    }
    
    $fecha="2015-01-25";
    print "la fecha ISO es ".$fecha." y la fecha JavaScript es ".fechaJS($fecha);
?>