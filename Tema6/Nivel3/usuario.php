<?php

class Usuario
{
    private $nombre;
    private $apellido;
    private $email;

    public function __construct(string $nombre, string $apellido, string $email)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }

    public function __toString() : string
    {
        return "Nombre: " . $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Email: " . $this->email;
    }
    
}

?>