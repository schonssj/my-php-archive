<?php

/*
    DO-WHILE is a conditional statement similar to WHILE, with a exception that the condition will be attended at
    least one time.
*/

$total = 150;
$discount = .9;

do {
    $total *= $discount;
} while ($total > 100);

echo $total;
