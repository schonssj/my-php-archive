<?php

/*
    A function is a piece of code with an specific objective, encapsulated under a single structure that receive a set
    of parameters and returns a data. A function is declared a single time, but can be used various times.
*/

// Without parameters.
function helloWorld() {
    return "Hello world!";
}
echo helloWorld() . "<br>";

function salary() {
	return 946.00;
}
echo "John has received 3 salaries, resulting: R$".(salary() * 3) . ",00." . "<br>";

// With parameters.
function calcObesity($height, $weight) {
    return $height / ($weight * $weight);
}
echo "Obesity index: " . calcObesity(70, 1.85);
