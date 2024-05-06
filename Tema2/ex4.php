<?php
    $numeroFinal = 15;
    $intervalo = 3;

    contador( $intervalo, $numeroFinal);
    contador( $intervalo); //Con valor por defecto

    function contador($intervalo, $numeroFinal = 10)
    {
        echo "Número final: " . $numeroFinal . " . Intervalo: " . $intervalo . "<br>";
        for($i = 0; $i <= $numeroFinal; $i += $intervalo)
        {
            echo $i . "<br>";
        }
    }
?>