<?php

/*
    An anonimous function is one that have no specified name.
    They are most useful as the value of callback parameters.
*/

function test($callback) {
	// Slow process.
	$callback();
}
test(function() {
	echo "It works!<br>";
});

$function = function($parameter) {
	var_dump($parameter);
};
$function("Testing...");
