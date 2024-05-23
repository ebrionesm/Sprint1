<?php

enum Genero : string
{
    case AVENTURAS = 'AVENTURAS';
    case CIENCIA_FICCION = 'CIENCIA-FICCIÓN';
    case CUENTO = 'CUENTO';
    case NOVELA_POLICIAL = 'NOVELA POLICIAL';
    case PARANOMAL = 'PARANORMAL';
    case DISTOPIA = 'DISTOPIA';
    case FANTASIA = 'FANTASÍA';
}

class Libro
{
    private string $titulo;
    private string $autor;
    private int $isbn;
    private Genero $genero;
    private int $numPag;

    public function __construct(string $titulo, string $autor, int $isbn, Genero $genero, int $numPag)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
        $this->numPag = $numPag;
    }

    public function getTitulo() : string
    {
        return $this->titulo;
    }

    public function getAutor() : string
    {
        return $this->autor;
    }

    public function getIsbn() : int
    {
        return $this->isbn;
    }

    public function getGenero() : Genero
    {
        return $this->genero;
    }

    public function getNumPag() : int
    {
        return $this->numPag;
    }

    public function setTitulo(string $titulo) : void
    {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor) : void
    {
        $this->autor = $autor;
    }

    public function setIsbn(int $isbn) : void
    {
        $this->isbn = $isbn;
    }

    public function setGenero(Genero $genero) : void
    {
        $this->genero = $genero;
    }

    public function setNumPag(int $numPag) : void
    {
        $this->numPag = $numPag;
    }

}

?>