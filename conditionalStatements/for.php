<?php

/*
    FOR is a conditional statement that repeats a loop while the established conditions are true.
    
    for(initialValue; value < condition; increment/decrement) {...}

    NOTE: As Linus Torvalds says, use preferentially minus of three iteration levels.
*/

for ($counter = 0; $counter < 10; $counter++) {
	echo $counter . "<br>";
}

for ($counter = 10; $counter < 100; $counter += 5) {
	// The 'continue' operator continues the execution of a script according by the parameters.
	if ($counter > 20 && $counter < 80) continue;
    // The 'break' operator stops the execution of a script according by the parameters.
	if ($counter === 90) break;

	echo $counter . "<br>";
}
