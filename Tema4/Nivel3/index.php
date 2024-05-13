<?php
require("pelicula.php");
require("cine.php");
$pelicula1 = new Pelicula("Peli 1", 75, "Director 1");
$pelicula2 = new Pelicula("Peli 2", 80, "Director 2");
$pelicula3 = new Pelicula("Peli 3", 85, "Director 3");
$pelicula4 = new Pelicula("Peli 4", 50, "Director 1");
$cine1;
$cines = [];

$peliculas1 = [];
$peliculas2 = [];

array_push($peliculas1, $pelicula1, $pelicula3);
array_push($peliculas2, $pelicula1,  $pelicula2, $pelicula4);

$cine1 = new Cine("Cine 1", "Poblacion 1", $peliculas1);
$cine2 = new Cine("Cine 2", "Poblacion 2", $peliculas2);
array_push($cines, $cine1, $cine2);

echo $cine1->peliculaMayorDuracion()->getNombre() . "<br>";

foreach($cine1->getPeliculas() as $pelicula)
{
    echo($pelicula->mostrarInfo());
}

buscarDirector($cines, "Director 1");

function buscarDirector(array $cines, string $director) : void
{
    $peliculasRepetidas = [];
    $esRepetida = false;
    foreach($cines as $cine)
    {
        foreach($cine->getPeliculas() as $pelicula)
        {
            if($pelicula->getDirector() == $director)
            {
                foreach($peliculasRepetidas as $peliRepe)
                {
                    if($pelicula->getNombre() == $peliRepe->getNombre())
                    {
                        $esRepetida = true;
                    }
                }
                array_push($peliculasRepetidas, $pelicula);
                if(!$esRepetida)
                {
                    echo($pelicula->mostrarInfo());
                }
                $esRepetida = false;
            }
        }
    }
}


?>