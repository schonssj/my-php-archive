<?php

// SWITCH-CASE is a conditional statament who simulates a test battery in a variable.

$weekDay = date("w");

switch ($weekDay) {
	case 0:
		echo "Sunday";
		break;
	case 1:
		echo "Monday";
		break;
	case 2:
		echo "Tuesday";
		break;
	case 3:
		echo "Wednesday";
		break;
	case 4:
		echo "Thursday";
		break;
	case 5:
		echo "Friday";
		break;
	case 6:
		echo "Saturday";
        break;
    // The default clause provides a return when the specified conditions were not attended.
	default:
		"Error! Invalid day.";
		break;
}
