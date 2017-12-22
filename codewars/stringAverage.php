<?php

///a function averaging the string values of numbers zero to nine that returns value in stringy form////
function average_string(string $s): string {
    ///if block returning "n/a" if input is empty string///
    if ($s === "") {
        return "n/a";
    }
    ///initializing $sum, and converting $s into array
    $sum = 0;
    $s = explode(" ", $s);
    ///loop with switch block converting stringy values to ints, and then summing those values///
    ///returns "n/a" if values are invalid///
    for ($i = 0; $i <= (count($s) - 1); $i++) {
        switch ($s[$i]) {
            case "zero":
                $s[$i] = 0;
                break;
            case "one":
                $s[$i] = 1;
                break;
            case "two":
                $s[$i] = 2;
                break;
            case "three":
                $s[$i] = 3;
                break;
            case "four":
                $s[$i] = 4;
                break;
            case "five":
                $s[$i] = 5;
                break;
            case "six":
                $s[$i] = 6;
                break;
            case "seven":
                $s[$i] = 7;
                break;
            case "eight":
                $s[$i] = 8;
                break;
            case "nine":
                $s[$i] = 9;
                break;
            default:
                return "n/a";
        }
        $sum += $s[$i];
    }
    ///setting average of inputs, rounding to floor///
    $average = floor($sum / count($s));
    ///switch block converting int $average value to expected stringy form///
    switch ($average) {
            case "0":
                $average = "zero";
                break;
            case "1":
                $average = "one";
                break;;
            case "2":
                $average = "two";
                break;
            case "3":
                $average = "three";
                break;
            case "4":
                $average = "four";
                break;
            case "5":
                $average = "five";
                break;
            case "6":
                $average = "six";
                break;;
            case "7":
                $average = "seven";
                break;
            case "8":
                $average = "eight";
                break;
            case "9":
                $average = "nine";
                break;
        }
        ///returns the value of $average///
        return $average;
    
    
    

}
///takes input values like this///
average_string("zero eight nine two");
///this example outputs "four"/////
