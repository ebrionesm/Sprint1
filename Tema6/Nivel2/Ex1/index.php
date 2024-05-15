<?php

require_once("recurso.php");

$recurso = new Recurso("Recurso1", Tema::PHP, "URL1.com", Tipo::FICHERO);

//echo $recurso->getTema()->value;

echo $recurso->__toString();

?>