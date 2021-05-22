<?php
// Instance of mysqli object. Parameters: host, user, password, database.
$conn = new mysqli("localhost", "root", "aluno", "db");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("UPDATE tbl SET type_string = ?, type_integer = ?, type_double = ? WHERE id = ?");
$string = "Another String";
$integer = 4;
$double = 5.2;
$id = 3;
$stmt->bind_param("sidi", $string, $integer, $double, $id);
// The execute() function executes the prepared query.
$stmt->execute();
// The close() function closes the prepared statement.
$stmt->close();
