<?php

//Ex1
$listaNumeros = [1,2,5,8,4];

for($i = 0; $i < count($listaNumeros); $i++)
{
    echo $listaNumeros[$i] . " ";
}

//Ex2
$X = array (10, 20, 30, 40, 50,60);
echo "<br>Tamaño array: " . count($X);

unset($X[2]);
$X = array_values($X);

echo "<br> Lista X (elemento eliminado: 30): ";
for($i = 0; $i < count($X); $i++)
{
    echo $X[$i] . " ";
}
echo "<br>Tamaño array: " . count($X);

//Ex3

$palabras = ["hola", "Php", "Html"];
$caracter = "h";
$contiene = contienenCaracter($palabras, $caracter);
echo $contiene ? "<br>Todas las palabras contienen el carácter " : "<br>Alguna(s) de las palabras no contienen el carácter ";
echo $caracter;

function contienenCaracter($palabras, $caracter)
{
    $contains = true;
    foreach($palabras as $palabra)
    {
        if(!str_contains(strtoupper($palabra), strtoupper($caracter)))
        {
            $contains = false;
        }
    }

    return $contains;
}

//Ex4

$yo = [
    'nombre' => "Eduardo",
    'edad' => 28,
    'email' => "ebrionesm96@gmail.com",
    'comida' => "Ceviche"
];

echo "<br>" . $yo['nombre'] . "<br>" . $yo['edad'] . "<br>" . $yo['email'] . "<br>" . $yo['comida'];
?>