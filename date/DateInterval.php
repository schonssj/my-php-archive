<?php
$dt = new DateTime();
// The DateInterval() object stores an amount of time.
$period = new DateInterval("P15D");
$dt->add($period);
// Printing the sum's result.
echo $dt->format("d/m/Y H:i:s");
