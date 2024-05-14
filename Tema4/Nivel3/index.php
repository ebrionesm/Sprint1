<?php
require("pelicula.php");
require("cine.php");

function buscarDirector(array $cines, string $director) : void
{
    $peliculasRepetidas = [];
    $esRepetida = false;
    $cinesEmision = [];
    echo "Has buscado el director: " .  $director . ". Sus películas son:<br>";
    foreach($cines as $cine)
    {
        foreach($cine->getPeliculas() as $pelicula)
        {
            if($pelicula->getDirector() == $director)
            {
                $esRepetida = comprobarPeliculaRepetida($pelicula, $peliculasRepetidas);
                
                array_push($peliculasRepetidas, $pelicula);
                echo "Cine: " . $cine->getNombre() . "<br>";
                if(!$esRepetida)
                {
                    echo($pelicula->mostrarInfo());
                    array_push($cinesEmision, $cine);
                }
                $esRepetida = false;
            }
        }
    }
}

function comprobarPeliculaRepetida(Pelicula $pelicula, array $peliculasRepetidas) : bool
{
    $esRepetida = false;
    foreach($peliculasRepetidas as $peliRepe)
    {
        if($pelicula->getNombre() == $peliRepe->getNombre())
        {
            $esRepetida = true;
        }
    }

    return $esRepetida;
}

function addPeliculaCine(Pelicula $pelicula, Cine $cine)
{
    array_push($pelicula->addCine($cine));
}

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




?>