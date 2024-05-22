<?php

use PHPUnit\Framework\TestCase;
require_once 'ex5.php';

final class VerificarGradoEstudianteTester extends TestCase
{

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

    public static function isValidParameterDataProvider()
    {
        return array(
            array(NULL),
            array("número"),
            array(false),
            array(5.5),
            array(5)
        );
    }

    /**
     * @dataProvider isValidParameterDataProvider
     */

    public function testValidParameter($value)
    {
        $this->expectException(TypeError::class);
        $testValidParameter = verificarGradoEstudiante($value);
    }

    public static function isValidResultDataProvider()
    {
        return array(
            array(10, "Primera división"),
            array(5, "Segunda división"),
            array(4, "Tercera división"),
            array(0, "Suspendido"),
            array(5.9, "Segunda división"),
            array(4.4, "Tercera división"),
            array(3.2, "Suspendido"),
            array(3.34, "Tercera división"),
            array(4.5, "Segunda división"),
            array(6, "Primera división")
        );
    }

    /**
     * @dataProvider isValidResultDataProvider
     */

     public function testResult($value, $expected)
     {
        $result = verificarGradoEstudiante($value);
        $this->assertEqualsIgnoringCase($expected, $result);
     }

    //vendor\bin\phpunit Test/verificarGradoEstudianteTester.php para que no se me olvide
}

?>