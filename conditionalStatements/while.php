<?php

// WHILE is a conditional statement that repeats a loop while the established condition is true.

$condition = TRUE;

while($condition) {
    // The rand() function provides an random number who's delimited by the parameters.
	$number = rand(1, 10);

	if($number === 3) {
		echo "FINALLY!" . "<br>";
		$condition = FALSE;
	}
	echo $number . "<br>";
}
