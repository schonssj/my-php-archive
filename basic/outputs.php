<?php
// 'echo' prints one or more variables in console.
echo 'A', 'B', 'C';

// 'print()' prints a string in console.
print('ABC');

/*  'var_dump()' prints the content of a variable.
    If the parameter is an object, he'll print all of his attributes,
    if he's an multiple dimensions array, will print all of them, with his respective contents and data types.
*/
$mostUclChampions = array('Real Madrid', 'Milan', 'Liverpool');
var_dump($mostUclChampions);

$mostUclChampions2 = array('Bayern München', 'Barcelona', 'Ajax');
// 'print_r()' Prints the content of a variable, in a align form and suppressing the data types.
print_r($mostUclChampions2);
