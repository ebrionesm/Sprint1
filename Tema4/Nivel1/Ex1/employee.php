<?php

class Employee 
{
    private $nombre;
    private $sueldo;


    public function __construct(string $nombre, int $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getSueldo() : int
    {
        return $this->sueldo;
    }

    public function setNombre(string $nombre) : void
    {
        $this->nombre = $nombre;
    }

    public function setSueldo(string $sueldo) : void
    {
        $this->sueldo = $sueldo;
    }

    public function printData()
    {
        $respuesta = "Nombre: " . $this->getNombre() . " . <br>Sueldo: " . $this->getSueldo();
        $this->getSueldo() > 6000 ? $respuesta .=". <br>Sí" : $respuesta .= ". <br>No";
        $respuesta .= " ha de pagar impuestos.<br>";

        echo $respuesta;
    }

}

$employee = new Employee("Edu", 3500);
$employee2 = new Employee("Alberto", 7500);

$employee->printData();
$employee2->printData();

?>