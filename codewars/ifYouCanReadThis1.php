<?php
//a more elegant version of to nato function//
/**
*@author Sieg, b_rock
**/
function to_nato($words) {
// creating associative array for alpha to NATO translation//
  $alphabet = [
    "a" => "Alfa",
    "b" => "Bravo",
    "c" => "Charlie",
    "d" => "Delta",
    "e" => "Echo",
    "f" => "Foxtrot",
    "g" => "Golf",
    "h" => "Hotel",
    "i" => "India",
    "j" => "Juliet",
    "k" => "Kilo",
    "l" => "Lima",
    "m" => "Mike",
    "n" => "November",
    "o" => "Oscar",
    "p" => "Papa",
    "q" => "Quebec",
    "r" => "Romeo",
    "s" => "Sierra",
    "t" => "Tango",
    "u" => "Uniform",
    "v" => "Victor",
    "w" => "Whiskey",
    "x" => "Xray",
    "y" => "Yankee",
    "z" => "Zulu"
  ];
  //stripping whitespace and converting to lower case//
  $prepared = str_replace(" ", "", strtolower($words));
  // using strtr to translate characters of $prepared to the values for that associated key in $alphabet//
  // preg replace is used to match the first letter of each NATO word or a non alphanum character//
  // replace is then used to add space before capture group, and trim trims all whitespace from beginning and end//
  $result = trim(preg_replace(["@([A-Z\W])@"], " $1", strtr($prepared, $alphabet)));

  return $result;
}
