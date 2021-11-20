<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';

class BerlinClockTest extends TestCase {

    public function testCountGiven1ShouldReturn1(){
        //Alt + Enter
        //Arrange
        $berlinClock = new BerlinClock();

        //Act
        $actual = $berlinClock->count();

        //Assert
        $this->assertEquals("1", $actual);

    }

    public function test():int{
        $berlinClock = new BerlinClock();

        return $berlinClock->ligne5Minutes();
    }

}
