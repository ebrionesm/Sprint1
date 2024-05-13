<?php

require_once("shape.php");
require_once("rectangulo.php");
require_once("triangulo.php");
require_once("circulo.php");



$rectangulo = new Rectangulo(3, 5);
$triangulo = new Triangulo(3, 5);
$circulo = new Circulo(2);

echo "Área rectangulo: " . $rectangulo->calcularArea() . "<br>";
echo "Área triángulo: " . $triangulo->calcularArea() . "<br>";
echo "Área círculo: " . $circulo->calcularArea() . "<br>";

?>