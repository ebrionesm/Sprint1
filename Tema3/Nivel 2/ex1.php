<?php

$enteros = [2, 5, 7,4];
$floats =  [3.5, 8.6, 9.4, 2];

$interseccion = array_intersect($enteros, $floats);
$mezcla = array_merge($enteros, $floats);

echo "Intersección: ";
foreach($interseccion as $numero)
{
    echo $numero . " ";
}

echo "<br>Mezcla: ";
foreach($mezcla as $numero)
{
    echo $numero . " ";
}

?>