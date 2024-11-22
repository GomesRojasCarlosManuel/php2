<?php
// Definimos una cadena de texto
$cadena = "Aprender PHP es muy interesante y divertido.";

// 1. Longitud de la cadena
$longitud = strlen($cadena);
echo "1. La longitud de la cadena es: $longitud caracteres.<br>";

// 2. Buscar una subcadena
$subcadena = "PHP";
$posicion = strpos($cadena, $subcadena); // Busca la posición de la subcadena
if ($posicion !== false) {
    echo "2. La subcadena '$subcadena' se encontró en la posición: $posicion.<br>";
} else {
    echo "2. La subcadena '$subcadena' no se encontró.<br>";
}

// 3. Extraer una parte de la cadena con substr
$inicio = 10; // Desde la posición 10
$longitud_extraer = 10; // Extraemos 10 caracteres
$cadena_extraida = substr($cadena, $inicio, $longitud_extraer);
echo "3. La parte extraída de la cadena es: '$cadena_extraida'.<br>";

// 4. Convertir toda la cadena a minúsculas con strtolower
$cadena_minusculas = strtolower($cadena);
echo "4. La cadena en minúsculas es: '$cadena_minusculas'.<br>";

// 5. Reemplazar palabras en la cadena con str_replace
$palabra_original = "interesante";
$palabra_nueva = "fácil";
$cadena_reemplazada = str_replace($palabra_original, $palabra_nueva, $cadena);
echo "5. La cadena después del reemplazo es: '$cadena_reemplazada'.<br>";

/*Qué hace el programa:

--Trabaja con un texto (cadena de caracteres):
El texto inicial es: Aprender PHP es muy interesante y divertido.

--Aplica diferentes operaciones al texto:

1-Cuenta cuántos caracteres tiene.
2-Busca si dentro del texto aparece una palabra o "subcadena".
3-Toma una parte específica del texto.
4-convierte todo el texto a letras minúsculas.
5-reemplaza una palabra dentro del texto por otra.
*/
?>