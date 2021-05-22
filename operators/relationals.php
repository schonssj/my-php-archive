<?php

// Relational operators are used to comparate values or expressions, always resulting on a boolean value.

$a = 1;
$b = '1';

if($a == $b) {
    echo "$a and $b has the same value.";
} else if($a != $b) {
    echo "$a and $b hasn't the same value!";
}

echo "<br><br>";

$c = 2;
$d = '2';

if($c === $d) {
    echo "$c and $d has the same type and value.";
} else if($c !== $d) {
    echo "$c and $d has the same value, but not the same type.";
}

echo "<br><br>";
// PHP assume that '0' is an false value in logic comparations.

$e = 0;

if($e == FALSE) {
    echo "$e is false!" . "<br>";
}

if($e === FALSE) {
    echo "$e is of FALSE type!" . "<br>";
} else {
    echo "$e isn't of FALSE type!" . "<br>";
}

if($e === 0) {
    echo "$e is really zero!";
}
