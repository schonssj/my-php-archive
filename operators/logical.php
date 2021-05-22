<?php

// Logical operators are used to combine logical expressions between they, grouping conditional tests.

$palmeiras = TRUE;
$clubWorldCup = FALSE;

if($palmeiras AND $clubWorldCup) {
    echo "Palmeiras have club world cup!";
} else {
    echo "Palmeiras doesn't have club world cup! :(";
}

echo "<br><br>";

$palmeiras = FALSE;
$relegated = TRUE;

if($palmeiras XOR $relegated) {
    echo "Palmeiras had been relegated!";
} else {
    echo "Palmeiras doesn't had been relegated!";
}
