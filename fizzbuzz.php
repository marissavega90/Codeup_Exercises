<?php

$num1 = 1;

$num2 = 100;

for ($i = $num1; $i <= $num2; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {

        echo "FizzBuzz\n";

    }

    elseif ($i % 3 == 0) {

        echo "Fizz\n";

    }

    elseif ($i % 5 == 0) {

     echo "Buzz\n";
    }   

    

    else 

        echo "$i\n";
}
