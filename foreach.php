<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {

    if (is_integer($value)) {
        echo "$value\n";
    
    } elseif (is_string($value)) {
        echo "$value\n";
    
    } elseif (is_null($value)) {
        echo "$value\n";

    } elseif (is_float($value)) {
        echo "$value\n";
    
    } elseif (is_bool($value)) {
        echo "$value\n";
    
    } elseif (is_array($value)) {
        foreach($value as $detail) {
            echo "Array $detail\n";
        }
    
    }

}