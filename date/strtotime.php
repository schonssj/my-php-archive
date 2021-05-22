<?php
// The strtotime() function converts a string to a datetime type instruction.
$ts = strtotime("2001-09-11");
$ts = strtotime("+1 week");
echo date("l, d/m/Y", $ts) . "<br>";
