<?php
class Triangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = ($this->getAltura() * $this->getAncho()) /2;
        return $area;
    }
}
?>