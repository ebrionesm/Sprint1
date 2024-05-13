<?php

class Perro extends Animal
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function makeSound() : void
    {
        echo "Bup, bup!<br>";
    }
}

?>