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

    public function testConstructParameterString() : void
    {
        $this->expectException(TypeError::class);
        $testNumberChecker = new NumberChecker("numero");
    }

    public function testConstructParameterInt() : void
    {
        $this->expectException(TypeError::class);
        $testNumberChecker = new NumberChecker(5);
    }

    public function testIsEvenBool() : void
    {
        $isEvenChecker = new NumberChecker(5);;
        $this->assertIsBool($isEvenChecker->isEven());
    }

    public function testIsEvenFalse() : void
    {
        $isEvenChecker = new NumberChecker(5);;
        $this->assertFalse($isEvenChecker->isEven());
    }

    public function testIsPositiveBool() : void
    {
        $isPositiveChecker = new NumberChecker(5);
        $this->assertIsBool($isPositiveChecker->isPositive());
    }

    public function testIsPositiveTrue() : void
    {
        $isPositiveChecker = new NumberChecker(5);
        $this->assertTrue($isPositiveChecker->isPositive());
    }

    public function testIsPositiveZero() : void
    {
        $isPositiveChecker = new NumberChecker(0);
        $this->assertTrue($isPositiveChecker->isPositive());
    }

}



?>