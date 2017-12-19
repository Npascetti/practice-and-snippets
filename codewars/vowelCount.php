<?php
function getCount($str) {

  $vowPattern = "([^aeiou])";
  $vowRep = "$1";
  $vowelsCount = strlen(preg_replace($vowPattern, $vowRep, $str));
  return $vowelsCount;
}

getCount("abracadabra");
