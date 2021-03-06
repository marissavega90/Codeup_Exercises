<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function is_nothing_set($nothing) {
// TEST: If var $nothing is set, display '$nothing is SET'
    if (isset($nothing)) {
        return "\$nothing is SET" . PHP_EOL;
    }
}

function is_nothing_empty($nothing) {
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
    if (empty($nothing)) {
        return "\$nothing is EMPTY" . PHP_EOL;
    } 
}

function is_something_set($something) {
// TEST: If var $something is set, display '$something is SET'
    if (isset($something)) {
        return  "\$something is SET" . PHP_EOL;
    }
} 

unset($something);

echo is_nothing_set($nothing) . PHP_EOL;  
echo is_nothing_empty($nothing) . PHP_EOL;
echo is_something_set($something) . PHP_EOL; 


// Serialize the array $array, and output the results
$serialize = serialize($array);
    echo $serialize . PHP_EOL;

// Unserialize the array $array, and output the results
var_dump(unserialize($serialize));



//Isaac's code:

// function check_variable($variable) {
//     if(isset($variable)) {
//         return 'the variable is set';
//     } else {
//         return 'the variable is null';
//     }
// }


// echo '$nothing ' . check_variable($nothing) . PHP_EOL;
// echo '$something ' . check_variable($something) . PHP_EOL;
