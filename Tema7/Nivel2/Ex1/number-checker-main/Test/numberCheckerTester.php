<?php

use PHPUnit\Framework\TestCase;
require_once 'numberChecker.php';

final class NumberCheckerTester extends TestCase
{
    // Tests will go here
    public function testConstructParameterSame() : void
    {
        $testNumberChecker = new NumberChecker(5);

        $this->assertSame(5,$testNumberChecker->number);
    }

    public function testIsEvenBool() : void
    {
        $isEvenChecker = new NumberChecker(5);;
        $this->assertIsBool($isEvenChecker->isEven());
    }

    public function testIsPositiveBool() : void
    {
        $isPositiveChecker = new NumberChecker(5);
        $this->assertIsBool($isPositiveChecker->isPositive());
    }

    public static function isEvenDataProvider()
    {
        return array(
            array(5, false),
            array(6, true),
            array(-4, true),
            array(0, true),
        );
    }

    /**
     * @dataProvider isEvenDataProvider
     */

    public function testIsEven($value, $expected)
    {
        $isEvenChecker = new NumberChecker($value);
        $result = $isEvenChecker->isEven();
        $this->assertEquals($expected, $result);
    }

    public static function isPositiveDataProvider()
    {
        return array(
            array(5, true),
            array(-4, false),
            array(0, false),
        );
    }

    /**
     * @dataProvider isPositiveDataProvider
     */

    public function testIsPositive($value, $expected)
    {
        $isPositiveChecker = new NumberChecker($value);
        $result = $isPositiveChecker->isPositive();
        $this->assertEquals($expected, $result);
    }

    public static function isValidParameterDataProvider()
    {
        return array(
            array("numero"),
            array(NULL),
            array(5),
        );
    }

    /**
     * @dataProvider isValidParameterDataProvider
     */

    public function testValidParameter($value)
    {
        $this->expectException(TypeError::class);
        $testNumberChecker = new NumberChecker($value);
    }


}



?>