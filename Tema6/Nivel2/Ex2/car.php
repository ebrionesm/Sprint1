<?php

trait Turbo 
{
    public function turbo()
    {
        echo "S'ha iniciat el turbo.";
    }
}

class Coche
{
    use turbo;
    private string $marca;
    private string $matricula;
    private string $tipoCombustible;
    private int $maxVel;

    public function __construct(string $marca, string $matricula, string $tipoCombustible, int $maxVel)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->tipoCombustible = $tipoCombustible;
        $this->maxVel = $maxVel;
    }


}




?>