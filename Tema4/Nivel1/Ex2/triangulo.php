<?php
require_once "shape.php";
class Triangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = (parent::getAltura() * parent::getAncho()) /2;
        return $area;
    }

    
}



$triangulo = new Triangulo(3, 5);
echo "Área triángulo: " . $triangulo->calcularArea();

?>