<?php
require_once "shape.php";
require_once "rectangulo.php";
require_once "triangulo.php";



$rectangulo = new Rectangulo(3, 5);
echo "Área rectangulo: " . $rectangulo->calcularArea() . "<br>";

$triangulo = new Triangulo(3, 5);
echo "Área triángulo: " . $triangulo->calcularArea() . "<br>";

?>