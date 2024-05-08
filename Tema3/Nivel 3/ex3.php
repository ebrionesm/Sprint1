<?php

function comprobarNumerosEnteros(int $numero1, int $numero2) : int
{
    $esPrimo = true;
    $valor = $numero1;
    for($i = 2; $i < $numero2; $i++)
    {
        if($numero2%$i == 0)
        {
            $esPrimo = false;
        }
    }

    if($esPrimo)
    {
        $valor = $numero1 + $numero2;
    }

    return $valor;
}

$numeros = [2, 6, 9, 5, 3, 17];
$numerosPrimos = array_reduce($numeros, "comprobarNumerosEnteros", 0);

echo $numerosPrimos;

?>