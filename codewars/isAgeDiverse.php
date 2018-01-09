<?php
//a function that takes an array of associative arrays with information about developers as its parameter//
//function checks if there is at least one developer from each age group present in the array//
function is_age_diverse(array $a): bool{
    $ageArray = [];
    foreach ($a as $part) {
        foreach ($part as $key => $attribute) {
            if ($key == "age") {
                array_push($ageArray, $attribute);
            }
        }
    }
    
    sort($ageArray);
    $commaSepAge = implode(",", $ageArray);
    $pattern = "/(1\d,)+(2\d,)+(3\d,)+(4\d,)+(5\d,)+(6\d,)+(7\d,)+(8\d,)+(9\d,)+(1\d\d)/";
    if (preg_match($pattern, $commaSepAge) == 1) {
        return 1;
    } return 0;
}

/* this array returns true
$a = [
  [
    "first_name" => "Harry",
    "last_name" => "K.",
    "country" => "Brazil",
    "continent" => "Americas",
    "age" => 19,
    "language" => "Python"
  ],
  [
    "first_name" => "Kseniya",
    "last_name" => "T.",
    "country" => "Belarus",
    "continent" => "Europe",
    "age" => 29,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Jing",
    "last_name" => "X.",
    "country" => "China",
    "continent" => "Asia",
    "age" => 39,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Noa",
    "last_name" => "A.",
    "country" => "Israel",
    "continent" => "Asia",
    "age" => 40,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Andrei",
    "last_name" => "E.",
    "country" => "Romania",
    "continent" => "Europe",
    "age" => 59,
    "language" => "C"
  ],
  [
    "first_name" => "Maria",
    "last_name" => "S.",
    "country" => "Peru",
    "continent" => "Americas",
    "age" => 60,
    "language" => "C"
  ],
  [
    "first_name" => "Lukas",
    "last_name" => "X.",
    "country" => "Croatia",
    "continent" => "Europe",
    "age" => 75,
    "language" => "Python"
  ],
  [
    "first_name" => "Chloe",
    "last_name" => "K.",
    "country" => "Guernsey",
    "continent" => "Europe",
    "age" => 88,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Viktoria",
    "last_name" => "W.",
    "country" => "Bulgaria",
    "continent" => "Europe",
    "age" => 98,
    "language" => "PHP"
  ],
  [
    "first_name" => "Piotr",
    "last_name" => "B.",
    "country" => "Poland",
    "continent" => "Europe",
    "age" => 128,
    "language" => "JavaScript"
  ]
];
*/
