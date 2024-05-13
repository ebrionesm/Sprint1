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

        echo "Resultado: " . $figuras[$value] . "<br>";
    }

}

function getTotalThrows(array $dados) : int
{
    $valorTotal = 0;
    foreach($dados as $dado)
    {
        $valorTotal +=  $dado->getValorActual();
    }
    
    return $valorTotal;
}

$cantidadDados = 5;
$dados = [];
$totalValue = 0;

for($i = 0; $i < $cantidadDados; $i++)
{
    array_push($dados, new PokerDice());
}

foreach($dados as $dado)
{
    $dado->throw();
}

$totalValue = getTotalThrows($dados);

echo "<br>Valor total de tiradas: " . $totalValue;

?>