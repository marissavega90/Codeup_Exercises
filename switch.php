<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

if ($dayOfWeek == 1) {
    echo 'It\'s Monday!' . PHP_EOL;
} elseif ($dayOfWeek == 2) {
    echo 'It\'s Tuesday!' . PHP_EOL;
} elseif ($dayOfWeek == 3) {
    echo 'It\'s Wednesday!' . PHP_EOL;
    echo 'Food truck day!' . PHP_EOL;
} elseif ($dayOfWeek == 4) {
    echo 'It\'s Thursday!' . PHP_EOL;
} elseif ($dayOfWeek == 5) {
    echo 'It\'s Friday!' . PHP_EOL;
} elseif ($dayOfWeek == 6) {
    echo 'It\'s Saturday!' . PHP_EOL;
} elseif ($dayOfWeek == 7) {
    echo 'It\'s Sunday!' . PHP_EOL;
}