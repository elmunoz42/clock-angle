<?php
    class Clock
    {

        function makeClockAngle($input_time)
        {
            $input_time_array = explode(":", $input_time);
            $hour_value = 0;
            if ($input_time_array[0] == 12) {
                $hour_value = 0;
            } else {
                $hour_value = $input_time_array[0] * 5;
            }

            $difference_in_degrees = ($hour_value - $input_time_array[1]) * 6;
            return $difference_in_degrees . " degrees";
        }
    }
 ?>
