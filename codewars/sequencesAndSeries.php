<?php
//a function that returns a score associated with the respective integer, as described in the table below//
/*
 n | score
---+-------
 1 |  50
 2 |  150
 3 |  300
 4 |  500
 5 |  750
 */
function get_score(int $n): int {
    $sum = 0;
    for ($i = 1, $multiplier = 50; $i <= $n; $i++) {
        $sum += $i * $multiplier;
    }
    return $sum;
}
