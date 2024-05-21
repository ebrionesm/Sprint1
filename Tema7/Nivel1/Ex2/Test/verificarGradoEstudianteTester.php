<?php

use PHPUnit\Framework\TestCase;
require_once 'ex5.php';

final class VerificarGradoEstudianteTester extends TestCase
{
    public function testParametroString() : void
    {
        //Mandando un string
        $this->expectException(TypeError::class);
        verificarGradoEstudiante("número");
    }

    public function testParametroBool() : void
    {
        //Mandando un bool
        $this->expectException(TypeError::class);
        verificarGradoEstudiante(true);
    }

    public function testParametroInt() : void
    {
        //Mandando un int
        $this->expectException(TypeError::class);
        verificarGradoEstudiante(5);
    }

    public function testParametroFloat() : void
    {
        //Mandando un float
        $this->expectException(TypeError::class);
        verificarGradoEstudiante(5.5);
    }

    public function testGradoReturnBool()
    {
        $this->assertIsBool(verificarGradoEstudiante(5));
    }

    public function testGradoReturnInt()
    {
        $this->assertIsInt(verificarGradoEstudiante(5));
    }

    public function testGradoReturnString()
    {
        $this->assertIsString(verificarGradoEstudiante(5));
    }

    //vendor\bin\phpunit Test/verificarGradoEstudianteTester.php para que no se me olvide
}

?>