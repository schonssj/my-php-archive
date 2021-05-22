<?php
// Instance of mysqli object. Parameters: host, user, password, database.
$conn = new mysqli("invalid", "invalid", "invalid", "invalid");

// The connect_error attribute displays an eventual connection error.
if($conn->connect_error) {
	echo "ERROR: " . $conn->connect_error;
	exit;
}
