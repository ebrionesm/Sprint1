<?php

costeLlamada(1);
costeLlamada(10);
costeLlamada(3);

function costeLlamada($duracion)
{
    $coste = 0.1;

    if($duracion > 3)
    {
        $coste += 0.05 * ($duracion - 3);
    }
    
    echo $coste . "<br>";
}

?>