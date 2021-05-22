<?php
// Instance of mysqli object. Parameters: host, user, password, database.
$conn = new mysqli("localhost", "root", "aluno", "db");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("DELETE FROM tbl WHERE id = ?");
$id = 2;
$stmt->bind_param("i", $id);
// The execute() function executes the prepared query.
$stmt->execute();
// The close() function closes the prepared statement.
$stmt->close();
