<?php
// The DateTime() object is an instance of the PHP native type for time handling.
$datetime = new DateTime();
// Printing the current date and hour.
echo $datetime->format("d/m/Y H:i:s") . "<br>";

$dt = new DateTime();
$period = new DateInterval("P15D");
$dt->add($period);
// Printing the sum's result.
echo $dt->format("d/m/Y H:i:s");
