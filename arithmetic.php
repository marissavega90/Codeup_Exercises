<?php

fwrite(STDOUT, 'Input default values: ');
$num1 = trim(fgets(STDIN));
$num2 = trim(fgets(STDIN));

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR!: Both arguments must be numbers!\n";
    }
}

add($num1, $num2);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR!: Both arguments must be numbers!\n";
    }
}

subtract($num1, $num2);

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR!: Both arguments must be numbers!\n";
    }
}

multiply($num1, $num2);

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a / $b . PHP_EOL;
    } else {
        echo "ERROR!: Both arguments must be numbers!\n";
    }
}

divide($num1, $num2);

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } else {
        echo "ERROR!: Both arguments must be numbers!\n";
    }
}

modulus($num1, $num2);



?>