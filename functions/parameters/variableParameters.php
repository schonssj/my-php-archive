<?php

/*
    PHP also allows you to define a function with a variable number of parameters, obtaining them dynamically,
    even without knowing which and how many they are. The function 'func_num_args()' obtains the amount of arguments
    received, while 'func_get_args()' obtains which arguments has been received.
*/

function hello() {
    $args = func_get_args();
    $quantity = func_num_args();

    for($num = 0; $num < $quantity; $num++) {
        echo "Hello " . $args[$num] . "<br>\n";
    }
}
hello('John', 'Victor');

function another(){
	$args = func_get_args();
	return $args;
}
var_dump(another("Hey there!"));
