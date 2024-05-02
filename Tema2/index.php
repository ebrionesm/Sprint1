<?php
    $int = 0;
    $double = 0.5;
    $str = "String";
    $bool = true;
    
    define("nombre", "Eduardo");

    echo $int . "<br>";
    echo $double . "<br>";
    echo $str . "<br>";
    echo $bool . "<br>";
    echo nombre . "<br>";

    $helloWorld = "Hello World!";
    echo $helloWorld . "<br>";
    
    echo strtoupper($helloWorld) . "<br>";
    echo strlen($helloWorld) . "<br>";
    echo strrev($helloWorld) . "<br>";

    $cursPhpStr = "Aquest és el curs PHP";
    echo $helloWorld . ' ' . $cursPhpStr . "<br>";

    $X = 4;
    $Y = 7;
    $N = 3.5;
    $M = 2.3;

    echo $X . "<br>";
    echo $Y . "<br>";
    echo 'Suma: ' . $X+$Y . "<br>";
    echo 'Resta: ' . $X-$Y . "<br>";
    echo 'Producto: ' . $X*$Y . "<br>";
    echo 'Módulo: ' . $X/$Y . "<br>";

    echo $N . "<br>";
    echo $M . "<br>";
    echo 'Suma: ' . $N+$M . "<br>";
    echo 'Resta: ' . $N-$M . "<br>";
    echo 'Producto: ' . $N*$M . "<br>";
    echo 'Módulo: ' . $N/$M . "<br>";

    echo "X*2: " . $X*2;


?>