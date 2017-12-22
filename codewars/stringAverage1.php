<?php
///a much cleaner and drier version of the string average function///
/**
*@author AdilGabdullin
**/
function average_string(string $s): string
{
    if ($s === '') {
        return 'n/a';
    }
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

    $words = explode(' ', $s);
    $sum = 0;
    foreach ($words as $word) {
        if (!isset($values[$word])) {
            return 'n/a';
        }
        $sum += $values[$word];
    }
    $avg = floor($sum / count($words));
    return array_search($avg, $values);
}
