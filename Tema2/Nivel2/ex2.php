<?php


$total = 0;

$total += costeChocolate(2) + costeChicles(1) + costeCaramelos(1);

echo "Total: " . $total;

function costeChocolate($cantidad)
{
    define("chocolate", 1); //No sé si es mejor en este caso usar define o simplemente introducir la cantidad tal cual.
    return $cantidad * chocolate;
}

function costeChicles($cantidad)
{
    define("chicles", 0.5);
    return $cantidad * chicles;
}

function costeCaramelos($cantidad)
{
    define("caramelos", 1.5);
    return $cantidad * caramelos;
}

?>