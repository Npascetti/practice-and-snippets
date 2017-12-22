<?php
///a function taking the input int and returning an array counting down from it
function reverseSeq ($n) {
  ///initializing empty array///
    $returnArray = [];
    ///for loop pushing values counting up to $n to values in $returnArray///
    for ($i = 1; $i <= $n; $i++) {
        array_push($returnArray, $i);
    }
    ///returning the values in $returnArray in reverse order///
    return array_reverse($returnArray);
};
