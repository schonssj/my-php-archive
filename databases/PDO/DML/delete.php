<?php
// Instance of PDO object. Parameters: host, database, user, password.
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "aluno");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("DELETE FROM tbl WHERE id = :ID");
$id = 1;
// The bindParam() function binds a variable to its corresponding reference defined on the prepare() statement.
$stmt->bindParam(":ID", $id);
// The execute() function executes the prepared query.
$stmt->execute();
