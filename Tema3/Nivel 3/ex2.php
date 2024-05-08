<?php

function filtrarStringPar(string $palabra): bool
{
    return strlen($palabra)%2 == 0 ? true : false;
}

$strings = ["patata", "no sé", "ordenador", "rata"];
$stringFiltrado = array_filter($strings, "filtrarStringPar");

foreach($stringFiltrado as $palabra)
{
    echo $palabra . "<br>";
}


?>