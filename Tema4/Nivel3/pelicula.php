<?php

class Pelicula
{
    private $nombre;
    private $duracion;
    private $director;
    private $cines;

    public function __construct(string $nombre, int $duracion, string $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director =  $director;
        $this->cines = [];
    }

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getDuracion() : int
    {
        return $this->duracion;
    }

    public function getDirector() : string
    {
        return $this->director;
    }

    public function getcines() : array
    {
        return $this->cines;
    }

    public function setNombre() : void
    {
        $this->nombre =  $nombre;
    }

    public function setDuracion() : void
    {
        $this->duracion =  $duracion;
    }

    public function setDirector() : void
    {
        $this->director =  $director;
    }

    public function setCines() : void 
    {
        $this->cines = $cines;
    }

    public function addCine(Cine $cine)
    {
        array_push($this->cines, $cine);
    }

    public function mostrarInfo() : string
    {
        return "Nombre: " . $this->getNombre() . "<br>Duración: " . $this->getDuracion(). "<br>Director: " . $this->getDirector() . "<br>";
    }
}


?>