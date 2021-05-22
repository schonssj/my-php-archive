<?php

/*
    To use the by reference approach to the functions, use the operator & in front of the parameter, validating
    the internal modifies applied in the external context of the function.
*/

function increments2(&$variable, $value) {
    $variable += $value;
}
$a = 10;
increments2($a, 20);
echo $a . "<br>";

$p = 40;
function changeValue2(&$p){
	$p += 20;
	return $p;
}
echo changeValue2($p) . "<br>" . $p . "<br>";
// In a foreach.
$person = array(
	'name' => 'John',
	'age' => 20
);
foreach ($person as &$value) {
	if(gettype($value) === "integer") $value += 10;
	echo $value . '<br>';
}
print_r($person);
echo "<br>";
