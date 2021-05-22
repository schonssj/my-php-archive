<?php
$cookie = setcookie("COOKIE_NAME", json_encode(array("name"=>"J")), time() + 3600);

$response = ($cookie) ? "COOKIE CREATED SUCCESSFULLY!" : "ERROR!";
echo $response;
