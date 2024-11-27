<?php
  if ($_GET["a"]) {
    $archivo = "dioses/".$_GET["a"];
    touch($archivo);
    unlink($archivo);
    }

    header("location:tabla.php"); 
?>

 
    