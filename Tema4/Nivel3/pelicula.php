<?php

class Pelicula
{
    private $nombre;
    private $duracion;
    private $director;

    public function __construct(string $nombre, int $duracion, string $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director =  $director;
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

    public function mostrarInfo() : string
    {
        return "Nombre: " . $this->getNombre() . "<br>Duración: " . $this->getDuracion(). "<br>Director: " . $this->getDirector() . "<br>";
    }
}


?>