<?php
require_once("pokemon.php");
require_once("tipo.php");

function devolverPokemonsPorTipo(Pokemon $pokemons, Tipo $tipo) : array
{
    $pokemonsTipo = array();
    foreach($pokemons as $pokemon)
    {
        if($pokemon->tipo == $tipo)
        {
            array_push($pokemonsTipo, $pokemon);
        }
    }

    return $pokemonsTipo;
}

function mostrarPokemonsPorTipo(array $pokemons)
{
    foreach($pokemons as $pokemon)
    {
        echo $pokemon->devolverNombrePokemon();
    }
}

function mostrarAtaques(array $ataques) : void
{

}

$pokemon1 = new Pokemon(1, "pikachu", Tipo::ELECTRICO, 20.5, 1.2, 
    array("impactrueno", "placaje eléctrico", "ataque3", "ataque4"));
$pokemon2 = new Pokemon(1, "poke2", Tipo::AGUA, 22.5, 1.2, 
array("ataque5", "ataque 6", "ataque3", "ataque4"));
$pokemon3 = new Pokemon(1, "poke3", Tipo::FUEGO, 22.5, 1.2, 
array("ataque5", "ataque 6", "ataque3", "ataque4"));
$pokemon4 = new Pokemon(1, "poke4", Tipo::TIERRA, 22.5, 1.2, 
array("ataque7", "ataque 20", "ataque3", "ataque4"));
$pokemon5 = new Pokemon(1, "poke5", Tipo::FUEGO, 22.5, 1.2, 
array("ataque5", "ataque 6", "ataque3", "ataque4"));
$pokemon6 = new Pokemon(1, "poke6", Tipo::ELECTRICO, 22.5, 1.2, 
array("ataque5", "ataque 6", "ataque3", "ataque4"));

$pokemons = array($pokemon1, $pokemon2, $pokemon3, $pokemon4, 
$pokemon5, $pokemon6);

$pokemonsPorTipo = mostrarPokemonsPorTipo($pokemons, Tipo::TIERRA);


//var_dump($pokemon5->devolverNombrePokemon());
?>