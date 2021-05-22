<?php

/*
    A const is a fixed value who won't suffer modifications during the script execution.
    He's represented by a identifier and only can assume scalars values(bool, int, float and String).

    A scalar value can't be composed by values as vectors and objects.
    The const nomenclature rules is the same as variables rules, but she's not preceded by $ and generally assume
    UPPERCASE words.
*/

// 'define()' is the function who creates a const.
define("SERVER", "127.0.0.1");
echo SERVER;

echo "<br><br>";

// Values as an array.
define("DATABASE", [
	'host',
	'user',
	'password',
	'database'
]);
print_r(DATABASE);

echo "<br><br>";
// Native php const.
echo PHP_VERSION;

echo "<br><br>";
// DIRECTORY_SEPARATOR is a php native const who provides an '\'.
echo DIRECTORY_SEPARATOR;
