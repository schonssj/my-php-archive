<?php 
// The session_start() function starts a session.
session_start();
// The session_unset() function removes the session's variables.
session_unset();

echo $_SESSION["name"];
// Destroying a session.
session_destroy();