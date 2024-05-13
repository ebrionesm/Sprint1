<?php

class Cine
{
    private $nombre;
    private $poblacion;
    private $peliculas;

    public function __construct(string $nombre, string $poblacion, array $peliculas)
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = $peliculas; 
    }

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getPoblacion() : string
    {
        return $this->poblacion;
    }

    public function getPeliculas() : array
    {
        return $this->peliculas;
    }

    public function setNombre(string $nombre) : void
    {
        $this->nombre = $nombre;
    }

    public function setPoblacion(string $poblacion) : void
    {
        $this->poblacion = $poblacion;
    }

    public function setPeliculas(array $peliculas) : void
    {
        $this->peliculas = $peliculas;
    }

    public function peliculaMayorDuracion() : Pelicula
    {
        $peli =  $this->getPeliculas()[0];

        foreach($this->peliculas as $pelicula)
        {
            if($pelicula->getDuracion() > $peli->getDuracion())
            {
                $peli = $pelicula;
            }
        }

        return $peli;
    }
}



?>