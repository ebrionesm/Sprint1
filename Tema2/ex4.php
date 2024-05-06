<?php
    $numeroFinal = 8;
    $intervalo = 1;

    contador($numeroFinal, $intervalo);

    function contador($numeroFinal = 10, $intervalo)
    {
        $numero = 0;
        for($i = 0; $i <= $numeroFinal; $i += $intervalo)
        {
            echo $i . "<br>";
        }
    }
?>