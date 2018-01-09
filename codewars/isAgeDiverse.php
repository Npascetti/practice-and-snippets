<?php
function is_age_diverse(array $a): bool{
    $ageArray = [];
    foreach ($a as $part) {
        foreach ($part as $key => $attribute) {
            if (is_int($attribute)) {
                array_push($ageArray, $attribute);
            }
        }
    }
    
    sort($ageArray);
    $commaSepAge = implode(",", $ageArray);
    $pattern = "/(1\d,)+(2\d,)+(3\d,)+(4\d,)+(5\d,)+(6\d,)+(7\d,)+(8\d,)+(9\d,)+(1\d\d)+/";
    if (preg_match($pattern, $commaSepAge) == 1) {
        return 1;
    } return 0;
}
