<?php
// a function that takes 2 stringy inputs of !s and ?s, first being left, second being right, and weighting !s as 2 and ?s as 3 //
// returns "Left" if left string is greater, "Right" if right string is greater, and "Balance" if equal // 
function balance(string $l, string $r): string {
   $replacePunctuation = function ($matches) {
        if ($matches[0] === "?") {
            return 3;
        } elseif ($matches[0] === "!") {
            return 2;
        }
    };
    
    $matchPattern = "/[?!]/";
    $stringyIntLeft = preg_replace_callback($matchPattern, $replacePunctuation, $l);
    $stringyIntRight = preg_replace_callback($matchPattern, $replacePunctuation, $r);
    $leftSum = array_sum(str_split($stringyIntLeft));
    $rightSum = array_sum(str_split($stringyIntRight));
    
    if ($leftSum > $rightSum) {
        return "Left";
    } elseif ($rightSum > $leftSum) {
        return "Right";
    } elseif ($leftSum === $rightSum) {
        return "Balance";
    }

}
