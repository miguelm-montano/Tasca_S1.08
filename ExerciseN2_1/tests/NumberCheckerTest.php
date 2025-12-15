<?php
namespace ExerciseN2_1\Tests;

use ExerciseN2_1\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public static function evenCases(): array {
        
        return [
            [4, true],
            [-2, true],
            [3, false],
            [-5, false],
            [0, true],
        ];
    }

    #[DataProvider('evenCases')]
    public function testIsEven($number, $expected) {

        $checker = new NumberChecker($number);
        $this->assertEquals($expected, $checker->isEven());
    }

    public static function positiveCases(): array {

        return [
            [4, true],
            [-2, false],
            [3, true],
            [-5, false],
            [0, false],
        ];
    }

    #[DataProvider('positiveCases')]
    public function testIsPositive($number, $expected) {
        $checker = new NumberChecker($number);
        $this->assertEquals($expected, $checker->isPositive());
    }

}

?>