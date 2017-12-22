<?php
///a much cleaner and drier version of the string average function///
/**
*@author AdilGabdullin
**/
function average_string(string $s): string
{
  ///if block returning "n/a" if input is an empty string///
    if ($s === '') {
        return 'n/a';
    }
    ///associative array containing index of stringy numbers and values as ints///
    $values = [
        'zero'  => 0,
        'one'   => 1,
        'two'   => 2,
        'three' => 3,
        'four'  => 4,
        'five'  => 5,
        'six'   => 6,
        'seven' => 7,
        'eight' => 8,
        'nine'  => 9,
    ];
    ///exploding input into array, initializing $sum///

    $words = explode(' ', $s);
    $sum = 0;
    ///foreach loop taking the values of $words and setting them to index of $values
    foreach ($words as $word) {
      ///returns "n/a" if the input value is not valid///
        if (!isset($values[$word])) {
            return 'n/a';
        }
        ///summing up the int values corresponding to the index from $words in the $values array///
        $sum += $values[$word];
    }
    ///averages the sum to the floor///
    $avg = floor($sum / count($words));
    ///returns stringy index from $values array based on the value of $avg///
    return array_search($avg, $values);
}
