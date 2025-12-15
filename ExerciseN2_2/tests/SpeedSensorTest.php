<?php
namespace ExerciseN2_2;

use ExerciseN2_2\SpeedSensor;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class SpeedSensorTest extends TestCase {

    public static function speedCases(): array {
        
        return [

            [10, 'Very slow'],
            [15, 'Very slow'],
            [20, 'Very slow'],
            [25, 'Very slow'],
            [29, 'Very slow'],

            [30, 'Right speed'],
            [40, 'Right speed'],
            [55, 'Right speed'],
            [60, 'Right speed'],

            [61, 'Minor excess'],
            [65, 'Minor excess'],
            [70, 'Minor excess'],
            [80, 'Minor excess'],

            [81, 'Moderate excess'],
            [85, 'Moderate excess'],
            [90, 'Moderate excess'],
            [99, 'Moderate excess'],

            [100, 'Serious excess'],
            [110, 'Serious excess'],
            [120, 'Serious excess'],

        ];
    }

    #[DataProvider('speedCases')]
    public function testSpeedSensor($speed, $expected) {

        $sensor = new SpeedSensor($speed);
        $result = $sensor->checkSpeed($speed);
        $this->assertEquals($expected, $result);
    }

}