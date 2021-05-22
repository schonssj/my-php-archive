<?php

/*
    The require instruction is very similar to 'include', with the difference in the errors handler.
    While include provides a WARNING message, require throws a FATAL ERROR message if the file not exists.
    
    The variant require_once provides a single inclusion of a file in a script, preventing overlaps,
    redeclarations, etc.
*/

require_once 'file.php';

echo $require;
