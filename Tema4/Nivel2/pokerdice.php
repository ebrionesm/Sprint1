<?php

class PokerDice
{

    public static $figuras = [
        1 => "A",
        2 => "K",
        3 => "Q",
        4 => "J",
        5 => 8,
        6 => 7
    ];

    private $cantidadTiradas;

    public function __construct()
    {
        $this->cantidadTiradas = 0;
    }

    public function getCantidadTiradas() : int
    {
        return $this->cantidadTiradas;
    }


    public function setCantidadTiradas(int $cantidadTiradas) : void
    {
        $this->cantidadTiradas = $cantidadTiradas;
    }


    public function throw() : int|string
    {
        $valor = rand(1, 6);
        $this->setCantidadTiradas($this->getCantidadTiradas() + 1);
        return self::$figuras[$valor];
    }

}

function getTotalThrows(array $dados) : int
{
    $valorTotal = 0;
    foreach($dados as $dado)
    {
        $valorTotal +=  $dado->getCantidadTiradas();
    }
    
    return $valorTotal;
}



?>