<?php
// Instance of mysqli object. Parameters: host, user, password, database.
$conn = new mysqli("localhost", "root", "aluno", "db");
// The query() function performs a query on the database.
$result = $conn->query("SELECT type_string, type_integer, type_double FROM tbl");
// Results.
foreach ($result as $key => $value) {
	foreach ($value as $k => $v) {
		echo $k . " : " . $v . "<br>";
	}
}