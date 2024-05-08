<?php
require_once "shape.php";
class Rectangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = parent::getAltura() * parent::getAncho();
        return $area;
    }

    
}



$rectangulo = new Rectangulo(3, 5);
echo "Área rectangulo: " . $rectangulo->calcularArea();

?>