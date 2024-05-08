<?php

class Shape 
{
    private $altura;
    private $ancho;

    public function __construct(float $altura, float $ancho)
    {
        $this->altura = $altura;
        $this->ancho = $ancho;
    }

    public function getAltura() : float
    {
        return $this->altura;
    }

    public function getAncho() : float
    {
        return $this->ancho;
    }

    public function setAltura(float $altura) : void
    {
        $this->altura = $altura;
    }

    public function setAncho(float $ancho) : void
    {
        $this->ancho = $ancho;
    }
}


?>