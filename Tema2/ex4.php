<?php
    $numeroFinal = 15;
    $intervalo = 3;

    contador($numeroFinal, $intervalo);

    function contador($numeroFinal = 10, $intervalo)
    {
        echo "Número final: " . $numeroFinal . " . Intervalo: " . $intervalo . "<br>";
        for($i = 0; $i <= $numeroFinal; $i += $intervalo)
        {
            echo $i . "<br>";
        }
    }
?>