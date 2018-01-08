<?php
//a function that takes a string, $s, and returns the ASCII values of all individual numbers of string, i.e. 75 is two values, 7 and 5//
//a second string array of numbers with the 7s converted to 1s is created. These summed numbers of the second array are subtracted from//
//the summed numbers of the first array
function calc($s) {
    $no7S = [];
    $s = str_split($s);
    foreach ($s as $key => $newS) {
        $s[$key] = ord($newS);
        $no7S[$key] = str_replace("7", "1", ord($newS));
    }
    return array_sum(str_split(implode($s))) - array_sum(str_split(implode($no7S)));
}
calc("ABC");
//this returns 6//
