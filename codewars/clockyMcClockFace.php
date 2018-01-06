<?php
//a function that takes an input angle of a clock hour hand and returns a formatted time, rounding down to the minute//
function what_time_is_it(float $angle) {
    if ($angle < 0 or $angle > 360) {
        return "Invalid range of angle";
    } 
    $hour = sprintf('%02d', floor($angle / 30));
    if ($hour == 00) {
        $hour = 12;
    }
    $minute = substr(number_format(floor((((($angle / 30) - floor($angle/30)) * 60) / 100) * 100) / 100, 2), 2);
    var_dump($minute);
    return $hour . ":" . $minute;

}
