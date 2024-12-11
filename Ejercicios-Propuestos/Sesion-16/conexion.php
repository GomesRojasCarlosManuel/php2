<?php
//conexion con la base de datos, osea on la preguntas.sql que esta en el "localhost" 
$usuario="root";
$contraseña="";
$servidor="localhost";
$basededatos="tienda_de_abarrotes";
$conexion=mysqli_connect($servidor,$usuario,$contraseña) or die("no se ha podido conectar con el servidor");
$db=mysqli_select_db($conexion,$basededatos) or die ("no se ha podido conectar con la base de datos");

//print "la conexion es exitosa";

?>