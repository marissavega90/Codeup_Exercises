<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
    if (is_integer($value)) {
        echo "$value is an integer\n";
    
    } elseif (is_string($value)) {
        echo "$value is a string\n";
    
    } elseif (is_null($value)) {
        echo "$value is null\n";

    } elseif (is_float($value)) {
        echo "$value is a float\n";
    
    } elseif (is_bool($value)) {
        echo "$value is a boolean\n";
    
    } elseif (is_array($value)) {
        print_r($value);

        // foreach ($variable as $value) {
        //     # code...
        // }

        // echo "$value is an array\n";
    
    }

}