<?php

function elevarCubo(int $numero) : int
{
    return pow($numero, 3);
}

$enteros = [3, 5, 2, 4, 6];

$enterosCubo = array_map("elevarCubo", $enteros);

foreach($enterosCubo as $numero)
{
    echo $numero . " ";
}
?>