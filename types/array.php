<?php

/*
    An array is a memory storaged values - numbers, strings, objects, etc. - list.
    The values can be accessed at any moment, because each value is relationed with a key.
    An array can grow dynamically with addition of new items.
*/

// A basic array.
$sports = array("Football", "Cyclism", "Athleticism");
print_r($sports);

echo "<br><br>";

// Inserting values into the array by the indexes.
$band[0][0] = "The Ramones";
$band[0][1] = "KISS";
$band[1][0] = "The Beatles";
$band[1][1] = "The Offspring";
print_r($band);
echo "<br>";
// end() provides the last element of a index.
echo end($band[0]);

echo "<br><br>";

// 'array_push()' pushes elements to the end of an array.
$teams = array();
array_push($teams, array(
    'team' => 'Internacional',
    'age' => 111
    ), array(
        'team' => 'Liverpool',
        'age' => 127
    )
);
print_r($teams);

echo "<br><br>";

// JSON array.
$json = '[{"stadium":"Beira-Rio","age":51},{"stadium":"Anfield","age":127}]';
$stadiums = json_decode($json, true);
print_r($stadiums);
