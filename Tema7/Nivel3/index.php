<?php
include_once("clases/libro.php");

$libros = [];

function addBook(Libro $libro, array $libros) : void
{
    array_push($libros, $libro);
}

//$libro = new Libro("Libro1", "Autora1", )

?>