<?php
class Rectangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = parent::getAltura() * parent::getAncho();
        return $area;
    }
}
?>