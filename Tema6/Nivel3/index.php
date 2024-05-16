<?php

require_once 'vendor/autoload.php';
require_once 'usuario.php';

$faker = Faker\Factory::create();

$usuario = new Usuario($faker->firstNameMale(), $faker->lastName(), $faker->email());
echo $usuario->__toString();

?>