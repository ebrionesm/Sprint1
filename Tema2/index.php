<?php
    $int = 0;
    $double = 0.5;
    $str = "String";
    $bool = true;
    
    define("nombre", "Eduardo");

    echo $int;
    echo $double;
    echo $str;
    echo $bool;
    echo nombre;

    $helloWorld = "Hello World!";
    echo $helloWorld;
    
    echo strtoupper($helloWorld);
    echo strlen($helloWorld);
    echo strrev($helloWorld);

    $cursPhpStr = "Aquest és el curs PHP";
    echo $helloWorld . ' ' . $cursPhpStr;

?>