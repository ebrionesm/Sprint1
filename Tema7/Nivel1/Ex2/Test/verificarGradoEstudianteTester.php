<?php

use PHPUnit\Framework\TestCase;
require_once 'ex5.php';

final class VerificarGradoEstudianteTester extends TestCase
{
    public function testParametroNull() : void
    {
        //Mandando un string
        $this->expectException(TypeError::class);
        verificarGradoEstudiante(NULL);
    }

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
        verificarGradoEstudiante(false);
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
        $this->assertIsNotBool(verificarGradoEstudiante(5));
    }

    public function testGradoReturnInt()
    {
        $this->assertIsNotInt(verificarGradoEstudiante(5));
    }

    public function testGradoReturnString()
    {
        $this->assertIsString(verificarGradoEstudiante(5));
    }

    public function testPrimeraDivFalse()
    {
        $this->assertNotEqualsIgnoringCase("Primera división", verificarGradoEstudiante(5.9));
    }

    public function testPrimeraDivTrue()
    {
        $this->assertEqualsIgnoringCase("Primera división", verificarGradoEstudiante(6));
    }

    public function testSegundaDivFalse()
    {
        $this->assertNotEqualsIgnoringCase("Segunda división", verificarGradoEstudiante(4.4));
    }

    public function testSegundaDivTrue()
    {
        $this->assertEqualsIgnoringCase("Segunda división", verificarGradoEstudiante(4.5));
    }

    public function testTerceraDivFalse()
    {
        $this->assertNotEqualsIgnoringCase("Tercera división", verificarGradoEstudiante(3.2));
    }

    public function testTerceraDivTrue()
    {
        $this->assertEqualsIgnoringCase("Tercera división", verificarGradoEstudiante(3.34));
    }

    public function testSuspendidoFalse()
    {
        $this->assertNotEqualsIgnoringCase("Suspendido", verificarGradoEstudiante(3.34));
    }

    public function testSuspendidoTrue()
    {
        $this->assertEqualsIgnoringCase("Suspendido", verificarGradoEstudiante(3.2));
    }

    //vendor\bin\phpunit Test/verificarGradoEstudianteTester.php para que no se me olvide
}

?>