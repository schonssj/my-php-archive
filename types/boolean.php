<?php

/*  
    The boolean type express a logic value that could be false(0) or true(1).

    A false value could be:
    - int 0;
    - float 0.0;
    - an empty String "" or "0";
    - an empty array;
    - an object without elements;
    - NULL type.
*/

$true = TRUE;
$false = FALSE;

if($true) {
    var_dump($true);
} else {
    var_dump($false);
}

if($true != $false) {
    var_dump($false);
} else {
    var_dump($true);
}
