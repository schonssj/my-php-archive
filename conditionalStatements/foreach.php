<?php

/*
    FOREACH is a conditional statement that iterate through arrays.
    Is a simplified FOR that decomposes an array in each one of his elements by your clause 'as'.

    foreach($array as $key => $value) or foreach($array as $value).
*/

$months = array(
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
);

foreach ($months as $month) {
	echo "The month is: " . $month . "<br>";
}

foreach ($months as $index => $month) {
	echo "Index: " . $index . "<br>";
	echo "The month is: " . $month . "<br>";
}