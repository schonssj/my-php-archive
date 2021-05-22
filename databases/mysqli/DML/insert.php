<?php
// Instance of mysqli object. Parameters: host, user, password, database.
$conn = new mysqli("localhost", "root", "aluno", "db");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("INSERT INTO tbl(type_string, type_integer, type_double) VALUES (?, ?, ?)");
// Parameters: "s"tring, "i"nteger, "d"ouble, "b"lob.
$stmt->bind_param("sid", $string, $integer, $double);
$string = "String";
$integer = 2;
$double = 2.5;
// The execute() function executes the prepared query.
$stmt->execute();
// Retrieving the generated id.
$id = $stmt->insert_id;
// The close() function closes the prepared statement.
$stmt->close();
