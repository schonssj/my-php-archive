<?php

/*
    All variables declared into the function scope are locals. To access an external variable without passing it as
    a parameter, we need to declare her as 'global'. A global variable is accessed in any point of the application.
*/

$total = 0;

function km2mi($kilometers) {
    global $total;
    $total += $kilometers;
    return $kilometers * 0.6;
}

echo "Ran through " . km2mi(100) . " miles away." . "<br>\n";
echo "Ran through " . km2mi(200) . " miles away." . "<br>\n";
echo "Ran through, in total " . $total . " kilometers away.";
