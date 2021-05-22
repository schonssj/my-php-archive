<?php

/*
    IF-ELSE is a conditional statement who introduces a conditional deviation in the natural course of the script.
*/

$internacional = 1;
$barcelona = 0;

if($internacional > $barcelona) {
    echo "Internacional is the champion of the world in 2006!";
} else {
    echo "Barcelona is the champion of the world in 2006!";
}

echo "<br><br>";

$gabiru = "DECISIVE";
$goals = 1;
$champion = TRUE;
// Default return is TRUE value.
if($gabiru) {
    echo "Adriano Gabiru was $gabiru!" . "<br>";
}

if(isset($ronaldinho)) {
    echo "Ronaldinho was $ronaldinho!";
}

if($goals > 0) {
    echo "Really, Adriano Gabiru was $gabiru!" . "<br>";
}

echo "<br>";

$scores = FALSE;
$ronaldinho = FALSE;
// Chaining.
if($ronaldinho === $scores) {
    if($scores <= 0) {
        echo "Wow, Ronaldinho TREMBLED!" . "<br>";
    }
}
if(($ronaldinho === $scores) AND ($scores <= 0)) {
    echo "Really, Ronaldinho TREMBLED!" . "<br><br>";
}

// Ternary operator. (CONDITION) ? TRUE : FALSE;
$worldChampion = ($champion === TRUE) ? "Gabiru was WORLD CHAMPION in 2006!" : "Ronaldinho was WORLD CHAMPION in 2006!";
echo $worldChampion;
