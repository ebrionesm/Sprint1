<?php
enum Tema : string
{
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case LARAVEL = 'LARAVEL';
}

enum Tipo : string
{
    case FICHERO = 'FICHERO';
    case ARTICULO_WEB = 'ARTICULO_WEB';
    case VIDEO = 'VIDEO';
}

class Recurso
{
    private $nombre;
    private ?Tema $tema;
    private $url;
    private ?Tipo $tipo;
    
    public function __construct(string $nombre, Tema $tema, string $url, Tipo $tipo)
    {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipo = $tipo;
    }

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getTema() : Tema
    {
        return $this->tema;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getTipo() : Tipo
    {
        return $this->tipo;
    }

    public function setNombre(string $nombre) : void
    {
        $this->nombre = $nombre;
    }

    public function setTema(Tema $tema) : void
    {
        $this->tema = $tema;
    }

    public function setUrl(string $url) : void
    {
        $this->url = $url;
    }

    public function setTipo(Tipo $tipo) : void
    {
        $this->tipo = $tipo;
    }

    public function __toString() : string
    {
        return "RECURSO<br>Nombre: " . $this->nombre . "<br>Tema: " . $this->tema->value . "<br>URL: " . $this->url . "<br>Tipo: " . $this->tipo->value;
    }


}


?>