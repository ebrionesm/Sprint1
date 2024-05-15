<?php

class Usuario
{
    private $nombre;
    private $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function __toString() : string
    {
        return "Me llamo: " . $this->nombre .  " " . $this->apellido;
    }
}

?>