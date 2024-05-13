<?php

class Gato extends Animal
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function makeSound() : void
    {
        echo "Meu!<br>";
    }
}

?>