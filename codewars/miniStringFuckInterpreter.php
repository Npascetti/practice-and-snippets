<?php
//an interpreter for MiniStringFuck language//
function my_first_interpreter(string $code) {
    $newCode = "";
    $splitCodes = str_split($code);
    foreach ($splitCodes as $splitCode) {
        if ($splitCode == "+" or $splitCode == ".") {
            $newCode .= $splitCode;
        }
    }
    $previousLengthArray = [];
    $interpretedString = "";
    $i = -1;
    $codeStrings = explode(".", $newCode);
    foreach ($codeStrings as $key => $codeString) {
        if ($key === 0) {
            $length = strlen($codeString);
        } else {
            $length = strlen($codeString) + $previousLengthArray[$i];
        }
        if ($length >= 256) {
            $length = abs(256 - (strlen($codeString) + $previousLengthArray[$i]));
        }
        $charCode = chr($length);
        array_push($previousLengthArray, $length);
        if ($key === count($codeStrings) - 1) {
            var_dump($interpretedString);
            return $interpretedString;
        }
        $interpretedString .= $charCode; 
        $i++;
    }
}
