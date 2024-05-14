<?php

class Rectangulo extends Shape
{
    public function calcularArea() : float
    {
        $area = $this->getAltura() * $this->getAncho();
        return $area;
    }
}
?>