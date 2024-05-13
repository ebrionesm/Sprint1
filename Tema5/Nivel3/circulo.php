<?php

class Circulo implements Area
{
    private $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function getRadio() : float
    {
        return $this->radio;
    }

    public function setRadio(float $radio) : void
    {
        $this->$radio = $radio;
    }

    public function calcularArea() : float
    {
        define("PI", 3.1415);
        $area = PI * pow($this->getRadio(), 2);
        return $area;
    }
}

?>