<?php

/*
    The include instruction includes and evaluate the informed file, providing his resources(variables, objects,
    arrays, etc.) to the file that called the include. If the file not exists, will turn a WARNING message.

    The variant include_once provides a single inclusion of a file in a script, preventing overlaps,
    redeclarations, etc.
*/

include_once 'file.php';

echo $include;
