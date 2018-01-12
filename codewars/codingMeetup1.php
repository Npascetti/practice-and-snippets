<?php
//a function that takes an array of associative arrays containing info about developers//
//returns the count of developers that are from Europe and are also JavaScript developers//
function count_developers($a) {
    $europeDevCount = 0;
    foreach ($a as $dev) {
        if (in_array("Europe", $dev) && in_array("JavaScript", $dev)) {
            $europeDevCount += 1;
        }
    }
    return $europeDevCount;
}
