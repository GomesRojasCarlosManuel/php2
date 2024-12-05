<?php
    include("conn.php");
    if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        if ($usuario=="" || $clave=="" ) {
            print "Todos los datos son requeridos";
        } else {
            $q="SELECT * FROM usuarios WHERE username='".$usuario;
            $q.="' AND clave='".$clave."'";
            $r=mysqli_query($link,$q);
            $n=mysqli_num_rows($r);

            if ($n==1) {
                print "Bienvenido al sistema";
            } else {
                print "Lo sentimos, no tiene acceso al sistema";
            }
            
        }
        
    } else {
        print "Acceso no permitido";
    }
        
?>