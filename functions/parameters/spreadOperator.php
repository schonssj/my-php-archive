<?php

/* 
    In a function, the 'spread operator'(...$param) provides a support to receive a variable amount of arguments that
    will be treated as an array.
*/

function sum(int ...$values) {
	return array_sum($values);
}
echo sum(4, 2) . "<br>";
