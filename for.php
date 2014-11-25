<?php

echo "Please input starting number \n";

if ($startnum = trim(fgets(STDIN))) {
    echo "Starting number is $startnum \n";
    echo "Please input ending number \n";
}

if ($endnum = trim(fgets(STDIN))) {
    echo "Ending number is $endnum \n";
}

echo "The numbers you have chosen are: \n";

for ($number = $startnum; $number <= $endnum; $number++) {

    echo "{$number}\n";
    
}