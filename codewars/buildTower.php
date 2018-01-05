<?php
//a function that returns a tower/pyramid of *s, given a number of floors, $n
function tower_builder(int $n): array {
    $tower = [];
    if ($n <= 0) {
        return ["This is not a valid number of floors for your tower"];
    } else {
        array_push($tower, str_repeat("*", $n + ($n - 1)));
        for ($i = $n - 1, $k = 1; $i > 0; $i--, $k++) {
            array_push($tower, str_repeat(" ", $k) . str_repeat("*", $i + ($i - 1)) . str_repeat(" ", $k));
            
        }
        
    }
    return array_reverse($tower);
}

tower_builder(3);
