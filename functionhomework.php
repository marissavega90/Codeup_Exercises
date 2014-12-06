<?php

// Fix Those Functions!

/*  We have some functions pre-defined for us, but they aren't working...

    Can you figure out why?  Fix those functions and get this code to work!

    Each function should accept some input and return some data.

    Each function has one common mistake, preventing it from working.

*/

$number1 = 10;
$number2 = 7;

$string1 = 'benjamin';
$string2 = 'franklin';

$array1 = ['banana', 'orange', 'mango', 'kiwi'];
$array2 = ['widget', 'wodget', 'wadget', 'wocket'];

/* -------------------------------- */

// This function accepts a number, and returns it's value squared.
function squareThis($number1) {
    
    $numSquared = $number1 * $number1;
    return $numSquared;
}

echo squareThis($number1) . PHP_EOL;

/* -------------------------------- */

// This function accepts a string, and returns that string with an uppercase first letter.
function upperCaseFirst($string) {

    $string = ucfirst($string);

}

echo upperCaseFirst($string1) . ' ' . upperCaseFirst($string2) . PHP_EOL;

/* -------------------------------- */

/* -------------------------------- */

// This function accepts a string and returns an array of letters.
function createArrayOfLetters($string) {

    $array = str_split($string);
    return $array;
}

print_r(createArrayOfLetters($string1));

/* -------------------------------- */

/* -------------------------------- */

// This function accepts two arrays, and returns one merged array.
function mergeTheseArrays($array1, $array2) {
    $mergedArray = array_merge($array1, $array2);
    return $mergedArray;
}

print_r(mergeTheseArrays($array1, $array2));

/* -------------------------------- */