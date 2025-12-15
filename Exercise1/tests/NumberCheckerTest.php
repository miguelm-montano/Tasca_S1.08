<?php
namespace Exercise1\Tests;

use Exercise1\NumberChecker;
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function testIsEven() {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testIsPositive() {
        $checker = new NumberChecker(-7);
        $this->assertFalse($checker->isPositive());
    }

}

?>
