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
        return $a + $b . PHP_EOL;
    }
}

echo add($num1, $num2);


function subtract($a, $b) {

    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } else {
        return $a - $b . PHP_EOL;
    }
}

echo subtract($num1, $num2);


function multiply($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);
    } else {
        return $a * $b . PHP_EOL;
    }
}

echo multiply($num1, $num2);


function divide($a, $b) {

    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } elseif ($a == 0 || $b == 0) {
        echo "ERROR!: Cannot divide by zero!\n"; 
    } else {
        return $a / $b . PHP_EOL;
    }
}

echo divide($num1, $num2);


function modulus($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        errorMsg();
        echo var_dump($a, $b);

    } elseif ($a == 0 || $b == 0) {
        echo "ERROR!: Cannot divide by zero!\n";

    } else {
        return $a % $b . PHP_EOL;
    }

}
echo modulus($num1, $num2);



?>