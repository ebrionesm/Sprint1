<?php

$isBitten;
$respuesta = "";

$isBitten = isBitten();

$isBitten == 0 ? $respuesta = "Sí" : $respuesta = "No";

echo "Mordido: " . $respuesta;

function isBitten()
{
    $resultado = rand(0, 1);
    
    return ($resultado == 0) ? true : false;
}

?>