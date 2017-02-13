<?php

    require_once "src/Clock.php";

    class ClockTest extends PHPUnit_Framework_TestCase
    {

        function test_findFirstClockAngle()
        {
            //Arrange
            $test_Clock = new Clock;
            $input_time = "1:00";

            //Act
            $result = $test_Clock->makeClockAngle($input_time);

            //Assert
            $this->assertEquals("30 degrees", $result);

        }

    }

 ?>
