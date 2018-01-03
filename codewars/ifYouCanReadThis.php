<?php
//function that converts a string input, $words, into the NATO alphabet//
function to_nato($words){
//initializing empty string to put output into//
    $output = "";
    //stripping spaces, turning into lowercase, and placing each character into array as seperate value//
    $words = str_split(strtolower(str_replace(' ', '', $words)));
    //associative array representing NATO words corresponding to their respective letters//
    $natos = [
        'a' => "Alfa",
        'b' => "Bravo",
        'c' => "Charlie",
        'd' => "Delta",
        'e' => "Echo",
        'f' => "Foxtrot",
        'g' => "Golf",
        'h' => "Hotel",
        'i' => "India",
        'j' => "Juliet",
        'k' => "Kilo",
        'l' => "Lima",
        'm' => "Mike",
        'n' => "November",
        'o' => "Oscar",
        'p' => "Papa",
        'q' => "Quebec",
        'r' => "Romeo",
        's' => "Sierra",
        't' => "Tango",
        'u' => "Uniform",
        'v' => "Victor",
        'w' => "Whiskey",
        'x' => "Xray",
        'y' => "Yankee",
        'z' => "Zulu"];
        //foreach loops iterating through arrays//
        foreach ($words as $word) {
        //checks if value of $word is not whitespace or alphanum, adds to $output if so//
            if (ctype_punct($word)) {
                $output .= $word . " ";
            }
            //checks if $word matches $key of $nato, if so outputs NATO value to $output//
            foreach ($natos as $key => $nato) {
                if ($key === $word) {
                    $output .= $nato . " "; 
                }  
            }
        }
        //trims whitespace from end of string//
        $output = rtrim($output);
        return $output;
}
