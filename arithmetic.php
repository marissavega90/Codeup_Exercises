<?php

fwrite(STDOUT, 'Input default values: ');

$num1 = trim(fgets(STDIN));
$num2 = trim(fgets(STDIN));


function errorMsg() {
    echo "Error!: Both arguments must be numbers!\n";
}

function add($a, $b) {

    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } else {
        echo $a + $b . PHP_EOL;
    }
}

add($num1, $num2);


function subtract($a, $b) {

    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } else {
        echo $a - $b . PHP_EOL;
    }
}

subtract($num1, $num2);


function multiply($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);
    } else {
        echo $a * $b . PHP_EOL;
    }
}

multiply($num1, $num2);


function divide($a, $b) {

    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } elseif ($a == 0 || $b == 0) {
        echo "ERROR!: Cannot divide by zero!\n"; 
    } else {
        echo $a / $b . PHP_EOL;
    }
}

divide($num1, $num2);


function modulus($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } elseif ($a == 0 || $b == 0) {
        echo "ERROR!: Cannot divide by zero!\n";

    } else {
        echo $a % $b . PHP_EOL;
    }
}
modulus($num1, $num2);



?>