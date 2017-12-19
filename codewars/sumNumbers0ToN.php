<?php
 class SequenceSum {
  function showSequence($count) {
     $list = array();
     $sum = 0;

    if ($count === 0) {
        return "0=0";
    }
    elseif ($count < 0) {
        return $count . "<0";
    }
    else {
        for ($i=0; $i<=$count; $i++) {
            $sum += $i;
            if ($i !== $count) {
                array_push($list, $i . "+");
            } else {
                array_push($list, $i . " = " . $sum);
            }
        }
  }
   return implode("", $list);
}


 }

$sum = new SequenceSum;

$sum->showSequence(46);
