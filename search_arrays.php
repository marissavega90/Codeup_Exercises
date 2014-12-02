 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 // Create a function that returns TRUE or FALSE if an array value is found

 function search($names) {
    
    // Search through the array to see where Tina is
    $result1 = array_search('Tina', $names);

    // If Tina is found, echo TRUE
    if ($result1 >= 0) {
        echo "TRUE" . PHP_EOL;
    } else {
        echo "FALSE" . PHP_EOL;
    }

    $result2 = array_search('Bob', $names);

    if ($result2) {
        echo " TRUE" . PHP_EOL;
    } else {
        echo " FALSE" . PHP_EOL;
    }

 }

 $results = search($names);

 echo $results;