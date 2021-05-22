<?php

// Arithmetic operators are used for mathematical calculation.
$a = 2;
$b = 4;

$sum = $a + $b;
echo $sum . "<br>";
$subtraction = $b - $a;
echo $subtraction . "<br>";
$multiplication = $a * $b;
echo $multiplication . "<br>";
$division = $b / $a;
echo $division . "<br>";
$module = $a % $b;
echo $module . "<br>";

// ATTENTION to the arithmetic priorities!
$wrong = $a + 3 * 4 + 5 * $b;
echo $wrong . "<br>";
$right = ($a + 3) * 4 + (5 * $b);
echo $right . "<br>";

// Note: PHP does the automatic conversion of types in a operation.
$c = 6;
$d = '8';
echo $c + $d;
