<?php
session_start();
echo "Mostrado por POST: <br>Usuario: " . $_POST["username"] . "<br>Contraseña: " . $_POST["password"] . "<br><br>";

$_SESSION["username"] =  $_POST["username"];

if(isset($_SESSION["username"]))
{
    echo "Mostrado por SESSION:<br>Usuario: " . $_SESSION["username"];
}
?>