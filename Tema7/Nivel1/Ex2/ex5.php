<?php

function verificarGradoEstudiante(int|float $nota) : string
{
    $rango = ($nota / 10) * 100; //Asumo que es mejor mult. por 10 a secas pero creo que queda más claro así.

    $respuesta = "";
    if($rango >= 60)
    {
        $respuesta = "Primera división";
    }
    else if ($rango >= 45)
    {
        $respuesta = "Segunda división";
    }
    else if ($rango >= 33)
    {
        $respuesta = "Tercera división";
    }
    else
    {
        $respuesta = "Suspendido";
    }

    return $respuesta;
}

$respuesta = "";
$nota = 5.5;
$respuesta = verificarGradoEstudiante($nota);
echo "Nota: " . $nota . ". Resultado: " . $respuesta . "<br>";

$nota = 6.5;
$respuesta = verificarGradoEstudiante($nota);
echo "Nota: " . $nota . ". Resultado: " . $respuesta . "<br>";

$nota = 2.5;
$respuesta = verificarGradoEstudiante($nota);
echo "Nota: " . $nota . ". Resultado: " . $respuesta . "<br>";




?>