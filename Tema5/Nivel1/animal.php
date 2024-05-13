<?php

abstract class Animal
{
    private $nombre;

    public function __construct( string $nombre)
    {
        $this->nombre = $nombre;
    }

    public abstract function makeSound() : void;
}


?>