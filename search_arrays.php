 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 // Create a function that returns TRUE or FALSE if an array value is found

 function name($name, $array) {
     
     $result = array_search($name, $array);

     if ($result === false) {
        return 'FALSE';
     } else {
        return 'TRUE';
     }
 }

$nameToSearch = 'Tina';
$arrayToSearch = $names;

echo name($nameToSearch, $arrayToSearch) . PHP_EOL;


$nameToSearch = 'Bob';
$arrayToSearch = $names;

echo name($nameToSearch, $arrayToSearch) . PHP_EOL;


// Create a function that compares two different arrays


function compareArrays($names, $compare) {
    
    $count = 0;

    foreach ($names as $name) {

        if (array_search($name, $compare) !== false) {
            $count++;
        }
    }

    return $count;
}

echo "The number of common values is:" . compareArrays($names, $compare) . PHP_EOL;

