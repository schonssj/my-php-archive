<?php
// Define a function that receives these four parameters from PHP.
function error_handler($code, $message, $file, $line) {
	echo json_encode(array("code"=>$code, "message"=>$message, "line"=>$line, "file"=>$file));
}
// The set_error_handler() function sets a user-defined error handler function. Parameter: the defined function name (string).
set_error_handler("error_handler");
// Generating an error.
echo 100 / 0;
