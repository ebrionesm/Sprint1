<?php

cribaEratostenes(20);

function cribaEratostenes($numero)
{
    $listaNoPrimos = [];
    $lista = [];
    $listaPrimos = [];

    for($i = 2; $i < $numero; $i++)
    {
        array_push($lista, $i);
    }

    for($i = 2; $i < sqrt($numero); $i++)
    {
        if(pow($i, 2) < $numero)
        {
            for($j = $i; $j <= $numero/$i; $j++)
            {
                array_push($listaNoPrimos, $i*$j);
            }
        }
    }

    $listaPrimos = array_diff($lista, $listaNoPrimos);

    echo "Números primos hasta " . $numero . ": ";
    foreach($listaPrimos as $valor)
    {
        echo $valor . " ";
    }
}

?>