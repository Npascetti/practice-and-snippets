<?php
///a function that takes an argument of an array of 20 single characters///
///10 are numberic, 10 are alpha///
///Returns an array of length 2. [0] is mean of numbers in original array///
///[1] is string value of letters in original order///
function mean(array $a): array {
  ///creating empty array to insert alphabetic values into///
    $alphaArray = [];
    ///foreach loop pushing only alpha characters to $alphaArray///
    ///unsetting the pushed characters from $a, leaving only ints in $a///
    foreach ($a as $key => $newa) {
        if (ctype_alpha($newa)) {
            array_push($alphaArray, $newa);
            unset($a[$key]);
        }
    }
    ///averaging ints, would prefer to divide by count($a), but tests not passing///
    $average = array_sum($a) / 10;
    ///removing/resetting all values in $a///
    array_splice($a, 0);
    ///assigning $average to $a[0] and stringy value of letters in $alphaArray to $a[1]
    $a[0] = $average;
    $a[1] = implode($alphaArray);
    return $a;
}

///example input///
mean(["u", "6", "d", "1", "i", "w", "6", "s", "t", "4", "a", "6", "g", "1", "2", "w", "8", "o", "2", "0"]);
///example outputs [3.6, "udiwstagwo"]///
