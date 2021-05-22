<?php

// In a scope of a function, the static variables keeps the value assumed in his last execution.

function travel($kilometers) {
    static $total;
    $total += $kilometers;
    echo "Ran through more $kilometers in a total of $total <br> \n";
}
travel(100);
travel(200);
travel(50);
