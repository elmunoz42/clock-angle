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

        function test_findNoonClockAngle()
        {
            //Arrange
            $test_Clock = new Clock;
            $input_time = "12:00";

            //Act
            $result = $test_Clock->makeClockAngle($input_time);

            //Assert
            $this->assertEquals("0 degrees", $result);

        }

        function test_find1230ClockAngle()
        {
            //Arrange
            $test_Clock = new Clock;
            $input_time = "12:30";

            //Act
            $result = $test_Clock->makeClockAngle($input_time);

            //Assert
            $this->assertEquals("180 degrees", $result);

        }
        function test_find1245ClockAngle()
        {
            //Arrange
            $test_Clock = new Clock;
            $input_time = "12:45";

            //Act
            $result = $test_Clock->makeClockAngle($input_time);

            //Assert
            $this->assertEquals("90 degrees", $result);

        }

    }

 ?>
