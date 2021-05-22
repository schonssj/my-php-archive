<?php
// Requiring the config file.
require_once 'config.php';
// The session_id() function returns the current id of this session.
echo session_id();
// The session_regenerate_id() function regenerates the session id.
session_regenerate_id();
echo "<br>";
// Printing the directory that stores the session's data.
echo session_save_path() . "<br>";

// Discovering the session's status.
switch(session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Session disabled.";
		break;
	case PHP_SESSION_NONE:
		echo "Session active and disabled.";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Session active.";
		break;
	default:
		break;
}
echo "<br>";

// Debugging the SESSION global object.
var_dump($_SESSION);

// Creating a key-value index on the SESSION global object.
$_SESSION["value"] = "Value";
