<?php
 
$a = 100;

do {
    
    echo "$a\n";
    
    $a -= 5;

} while ($a >= -10);

//REMEMBER WHAT YOU DID! 
//First I put "+= 5" which is WRONG
//needed to put "-= 5" in order to make it "* -5"
//then fixed "while" from "$a <= -10" to "$a >= -10" which works