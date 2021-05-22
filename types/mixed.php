<?php

/*
    The mixed type represents multiples data types in a same parameter.
    A mixed parameter indicates that the function accepts diverse data types as a parameter.
*/

$boolean = TRUE;
$integer = 1;
$double = 2.1;
$string = 'String';
$array = array();
// 'gettype()' is a function that returns the variable type.
echo gettype($boolean) . "<br>";
echo gettype($integer) . "<br>";
echo gettype($double) . "<br>";
echo gettype($string) . "<br>";
echo gettype($array);
