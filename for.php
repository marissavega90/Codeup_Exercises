<?php

echo "Please input starting number \n";

if ($startnum = trim(fgets(STDIN))) {

    if (is_numeric($startnum)) {

    echo "Starting number is $startnum \n";
    echo "Please input ending number \n";

    } else {

        echo "Not a number!";

        exit(0);

      }

}

if ($endnum = trim(fgets(STDIN))) {

    if (is_numeric($endnum)) {
        echo "Ending number is $endnum \n";
    } else {

        echo "Not a number!";

        exit (0);
      
      } 
}

echo "Count by what increment? \n";

if ($increment = trim(fgets(STDIN))) {
    if (is_numeric($increment)) {
        
        echo "Increment is: $increment\n";

        } else {

            echo "Not a number!";

            exit (0);

            }

        echo "The numbers you have chosen are: \n";

        for ($i = $startnum; $i <= $endnum; $i += $increment) {

        echo "$i\n";

        }
    }


