<?php

use PHPUnit\Framework\TestCase;
require_once 'clases/libro.php';

final class VerificarLibroTest extends TestCase
{
    public static function isValidParameterTituloDataProvider()
    {
        return array(
            array(NULL, NULL, NULL, NULL, NULL),
            array(4,4,4,4,4),
            array("a","a","a","a","a"),
            array(4, "a", 4444, Genero::AVENTURAS, 5),
            array("a", 4, 4444, Genero::AVENTURAS, 5),
            array("a", "a", "a", Genero::AVENTURAS, 5),
            array("a", "a", 4444, "AVENTURAS", 5),
            array("a", "a", 4444, Genero::AVENTURAS, "5"),
            array("a", "a", 4444, Genero::AVENTURAS, 5)
        );
    }

    /**
     * @dataProvider isValidParameterTituloDataProvider
     */

    public function testValidParameter($value)
    {
        $this->expectException(TypeError::class);
        $testLibroChecker = new Libro($value);
    }
}


?>