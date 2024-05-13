<?php

require_once("animal.php");
require_once("gato.php");
require_once("perro.php");

$gato = new Gato("Simba");
$perro = new Perro("Bruno");

$gato->makeSound();
$perro->makeSound();


?>