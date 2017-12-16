<?php
///////input stringy uuid as argument with formatting directly out of PhpStorm mySQL database including leading 0x //////////////
///////this will output a uuid string in a format that can be passed into the url, and is useful for testing RESTful services////

function formatuuid($uuidstring) {
    $uuidpattern = "/(\w{2})(\w{8})(\w{4})(\w{4})(\w{4})(\w{12})/i";
    $uuidreplace = "$2-$3-$4-$5-$6";
    $formatteduuid =  strtolower(preg_replace($uuidpattern, $uuidreplace, $uuidstring));
    echo $formatteduuid;
    
}

// example //////formatuuid("0xD57FE8FB3C2F4D75AB60AFF88C61CE6B");//////
/////this example will output "d57fe8fb-3c2f-4d75-ab60-aff88c61ce6b"////
