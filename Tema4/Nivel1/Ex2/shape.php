<?php

class Shape 
{
    protected $altura;
    protected $ancho;

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