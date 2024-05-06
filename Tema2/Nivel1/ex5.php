<?php

verificarGradoEstudiante(5.5);
verificarGradoEstudiante(6.5);
verificarGradoEstudiante(2.5);


function verificarGradoEstudiante($nota)
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

    echo "Nota: " . $rango. "%. Resultado: " . $respuesta . "<br>";
}

?>