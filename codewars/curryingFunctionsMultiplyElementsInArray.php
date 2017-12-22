<?php
function multiply_all($intArray) {
    return function ($multiplier) use ($intArray) {
        foreach ($intArray as &$value) {
            $value = $value * $multiplier;

        }
        return ($intArray);

    };
}
