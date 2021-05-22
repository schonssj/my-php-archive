<?php

/*
    We can pass the parameters by two modes: 'by value' and 'by reference'. The default approach is by value,
    because the parameter received by the function is treated as a local variable into the function context,
    not modifying his external value.
*/

function increments($variable, $value) {
    $variable += $value;
}
$a = 10;
increments($a, 20);
echo $a . "<br>";

$p = 10;
function changeValue1($p){
	$p += 50;
	return $p;
}
echo changeValue1($p) . "<br>" . $p . "<br>";
