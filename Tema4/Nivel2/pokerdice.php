<?php

class PokerDice
{
    public $caras = [
        1 => 14,
        2 => 13,
        3 => 12,
        4 => 11,
        5 => 8,
        6 => 7
    ];

    private $valorActual;

    public function __construct()
    {
        //$this->valorActual = $this->throw();
    }

    public function getValorActual() : int
    {
        return $this->valorActual;
    }

    public function setValorActual( int $valorActual) : void
    {
        $this->valorActual = $valorActual;
    }


    public function throw()
    {
        $valor = rand(1, 6);
        $this->shapeName($this->caras[$valor]);
        $this->setValorActual($this->caras[$valor]);
    }

    public function shapeName(int $value) : void
    {
        $figuras = [
            14 => "A",
            13 => "K",
            12 => "Q",
            11 => "J",
            8 => 8,
            7 => 7
        ];

        echo $figuras[$value];
    }

}

function getTotalThrows(PokerDice $valor1, PokerDice $valor2) : int
{
    
    return $valor1->getValorActual() + $valor2->getValorActual();
}

$cantidadDados = 5;
$dados = [];

for($i = 0; $i < $cantidadDados; $i++)
{
    array_push($dados, new PokerDice());
}

foreach($dados as $dado)
{
    $dado->throw();
}

$totalValue = array_reduce($dados, "getTotalThrows");

echo $totalValue;




/*for($i = 1; $i < 11; $i++)
{
    echo $i;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];

foreach($numeros as $numero)
{
    echo $numero;
}

$numero = 0;
while($numero < 10)
{
    $numero++;
    echo $numero;
}

sumarUno(1);

function sumarUno(int $valor)
{
    if($valor <= 10)
    {
        echo $valor;
        $valor++;
        sumarUno($valor);
    }
}*/
?>