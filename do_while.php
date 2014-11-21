<?php
 
$a = 2;

do {
    
    echo "$a\n";
    
    $a *= $a;

} while ($a < 1000000);

//REMEMBER WHAT YOU DID!
//This time put $a += $a SHOULD HAVE PUT $a *= $a!
//LEARN HOW TO WRITE  +=  -=  *=  /=  %=