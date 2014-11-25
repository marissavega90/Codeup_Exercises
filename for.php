 <?php

//OLD CODE TOO COMPLICATED

// echo "Please input starting number \n";

// if ($startnum = trim(fgets(STDIN))) {

//     if (is_numeric($startnum)) {

//     echo "Starting number is $startnum \n";
//     echo "Please input ending number \n";

//     } else {

//         echo "Not a number!";

//         exit(0);

//       }

// }

// if ($endnum = trim(fgets(STDIN))) {

//     if (is_numeric($endnum)) {
//         echo "Ending number is $endnum \n";
//     } else {

//         echo "Not a number!";

//         exit (0);
      
//       } 
// }

// echo "Count by what increment? \n";

// if ($increment = trim(fgets(STDIN))) {
//     if (is_numeric($increment)) {
        
//         echo "Increment is: $increment\n";

//         } else {

//             echo "Not a number!";

//             exit (0);

//             }

//         echo "The numbers you have chosen are: \n";

// $increment = ($increment == '') ? 1 : $increment;

//         for ($i = $startnum; $i <= $endnum; $i += $increment) {

//         echo "$i\n";

//         }
//     }

// NEW CODE MUCH MORE FANCY

fwrite(STDOUT, 'Please input starting number ');

$startnum = trim(fgets(STDIN));

    if (!is_numeric($startnum)) {

        echo "Not a number! \n";

        exit(0);
    }

fwrite(STDOUT, 'Please input ending number ');

$endnum = trim(fgets(STDIN));


    if (!is_numeric($endnum)) {

        echo "Not a number! \n";

        exit(0);
    }

fwrite(STDOUT, 'Increment by? ');

$increment = trim(fgets(STDIN));


    if (!is_numeric($increment)) {

        echo "Not a number! \n";

        exit(0);
    }

$increment = (!$increment) ? $increment : 1;

if($increment) {
    $increment = $increment;
} else {
    $increment = 1;
}

for ($i = $startnum; $i <= $endnum; $i += $increment) {

        echo "$i\n";

        }
