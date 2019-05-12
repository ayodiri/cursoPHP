<?php 
/**
 * las variables deben empezar con $, letra minúscula, sin espacios,
 * ni puede empezar por número.
 * No hay que especificar el tipo de valor a contener:
 * puede almacenar cadenas de texto entre comillas dobles o sencillas
 * puede almacenar números enteros, decimales
 * puede almacenar booleanos: true/false
 * puede almacenar Arrays, Objetos, Clases, Null
 */
    $nombre = "Aitziber";
    $numero = 7;
    $decimal = 7.7;
    $verdadero = true;
    echo $numero;
    echo 'Hola, $nombre';
    echo "Hola, $nombre";
    echo 'Hola, ' . $nombre;
    echo(gettype($nombre));
?>