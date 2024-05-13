<?php
class Triangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = (parent::getAltura() * parent::getAncho()) /2;
        return $area;
    }
}

?>