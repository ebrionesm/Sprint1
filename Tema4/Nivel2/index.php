<?php
require_once("pokerdice.php");

function tirarDados(array $dados)
{
    foreach($dados as $dado)
    {
        echo "Resultado: " . $dado->throw() . "<br>";
    }
}

$cantidadDados = 5;
$dados = [];
$totalValue = 0;

for($i = 0; $i < $cantidadDados; $i++)
{
    array_push($dados, new PokerDice());
}

tirarDados($dados);

$totalTiradas = getTotalThrows($dados);

echo "<br>Total dados tirados: " . $totalTiradas;
?>