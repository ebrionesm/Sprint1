<?php

require_once("tipo.php");

class Pokemon
{
    public int $id;
    public string $nombre;
    public Tipo $tipo;
    public float $peso;
    public float $altura;
    public array $ataques;

    public function __construct(int $id, string $nombre, Tipo $tipo, float $peso, 
    float $altura, array $ataques)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques = $ataques;
    }

    public function devolverListadoAtaques() : array
    {
        return $this->ataques;
    }

    public function devolverNombrePokemon() : string
    {
        return $this->nombre;
    }
}

?>