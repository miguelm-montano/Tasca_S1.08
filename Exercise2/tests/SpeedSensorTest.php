<?php
namespace Exercise2\Tests;

use Exercise2\SpeedSensor;
use PHPUnit\Framework\TestCase;

class SpeedSensorTest extends TestCase {

    public function testSlowSpeed() {
        $sensor = new SpeedSensor();
        $result = $sensor->checkSpeed(20);

        $this->assertEquals('Very slow', $result);
    }

    public function testRightSpeed() {
        $sensor = new SpeedSensor();
        $result = $sensor->checkSpeed(45);

        $this->assertEquals('Right speed', $result);
    }

    public function testMinorExcess() {
        $sensor = new SpeedSensor();
        $result = $sensor->checkSpeed(70);

        $this->assertEquals('Minor excess', $result);
    }

    public function testModerateExcess() {
        $sensor = new SpeedSensor();
        $result = $sensor->checkSpeed(90);

        $this->assertEquals('Moderate excess', $result);
    }

    public function testSeriousExcess() {
        $sensor = new SpeedSensor();
        $result = $sensor->checkSpeed(100);

        $this->assertEquals('Serious excess', $result);
    }

}

?>