<?php
    function limpiaHTML($cadena){
        $cadena=str_replace("<","&lt;",$cadena);
        $cadena=str_replace(">","&gt;",$cadena);
        $cadena=str_replace('"',"'",$cadena);
        return $cadena;
    }

    $cadena='<bold>Esto es una cadena <e>con </e> "HTML"</bold>';
    print "Cadena con HTML: ".$cadena."<br>";
    print "Cadena sin HTML: ".limpiaHTML($cadena);  
?>