<?php
//function that counts the binary bits equal to 1 from a decimal number input//
function countBits($n) {
    $bin = decbin($n);
    $binArray = str_split($bin);
    return array_sum($binArray);
}
