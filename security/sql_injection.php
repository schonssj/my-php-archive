<?php
// The SQL Injection attack occurs when a malicious user tries to enter SQL commands in the URL to perform an action on the database.

// Retrieving the id passed in the URL.
$id = (isset($_GET['id'])) ? $_GET['id'] : 2;
// Validating to avoid the attack.
if(!is_numeric($id) || strlen($id) > 5) {
	exit("CATCHED YOU MOTHERFUCKER!!!!!!!!!!!!!");
}
$conn = mysqli_connect("localhost", "root", "aluno", "db");
// A common mistake: don't put quotes around the passed variable.
$sql = "SELECT type_string, type_integer, type_double FROM tbl WHERE id = $id";
$exec = mysqli_query($conn, $sql);

while($result = mysqli_fetch_object($exec)) {
	var_dump($result);
}
