<?php

// Numbers can be specified in decimal notation, hexadecimal or octal, optionally preceded by signal (- or +).

$decimalNum = 1234;

$negativeNum = -1234;
// Equals to 83 in decimal notation.
$octalNum = 0123;
// Equals to 26 in decimal notation.
$hexaDecimalNum = 0x1A;

$float = 1.234;

$cientificNot = 1e23;

$types = array($decimalNum, $negativeNum, $octalNum, $hexaDecimalNum, $float, $cientificNot);

var_dump($types);
