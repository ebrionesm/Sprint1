<?php

use PHPUnit\Framework\TestCase;
require_once 'numberChecker.php';

final class NumberCheckerTester extends TestCase
{
    // Tests will go here
    public function testConstruct()
    {
        $testNumberChecker = new NumberChecker(5);

        $this->assertSame(5,$testNumberChecker->number);
    }

    public function testIsEven()
    {
        $isEvenChecker = new NumberChecker(5);;
        $this->assertIsBool($isEvenChecker->isEven());
        $this->assertFalse($isEvenChecker->isEven());
    }

    public function testIsPositive()
    {
        $isPositiveChecker = new NumberChecker(5);
        $this->assertIsBool($isPositiveChecker->isPositive());
        $this->assertTrue($isPositiveChecker->isPositive());
    }

}



?>