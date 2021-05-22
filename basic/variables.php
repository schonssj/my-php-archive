<?php

/*
    Variables are identifiers that represents mutable and volatible values
    who only exists during a execution of the script.
    They're armazened in the RAM memory and his content is destroyed after the script execution.

    NEVER start the variable's name with numbers;
    NEVER use blank spaces in a middle of variable's identifier;
    NEVER use special characters (!@#%^&/*|[]{}) in the variable's name;
    NEVER create variable's name with more than 15 characters;
    Variable's name MUST be significant and transmit his content's idea inside a context who's he's insert.
    Preferencially use lowercase words separated by underline '_' or the camelCase style.

    Remembering that PHP is case sensitive, so $var != $Var;
*/

$variable = "A variable!";
$correct_var = "A correct variable typing!";
$correctVariable = "Another correct variable typing!";

$variables = array($variable, $correct_var, $correctVariable);

print_r($variables);

/*  
    The concept of variable variables.
    The $ extra provides an override above the first defined variable.
    The variable name assume the first defined value and his content assume the second value defined.
*/
$variable = 'first';

$$variable = 'second';

echo "<br>" . $first . "<br>";

// When a variable is attributed to another one, a new storage area is created in the memory.

$a = 1;
$b = $a;
$b = 2;

echo $a . " / " . $b . "<br>";

/*
    To create variable refs - two variables point to the same memory region - the atribuition must be preceded
    by '&' operator. So, any change made in any of the variables will reflect in another.
*/

$c = 3;
$d = &$c;
$d = 4;

echo $c . " / " . $d;
