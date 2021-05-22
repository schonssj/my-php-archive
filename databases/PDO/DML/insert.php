<?php
// Instance of PDO object. Parameters: host, database, user, password.
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "aluno");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("INSERT INTO tbl(type_string, type_integer, type_double) VALUES (:TYPE_STRING, :TYPE_INTEGER, :TYPE_DOUBLE)");

$string = "String";
$integer = 2;
$double = 2.5;
// The bindParam() function binds a variable to its corresponding reference defined on the prepare() statement.
$stmt->bindParam(":TYPE_STRING", $string);
$stmt->bindParam(":TYPE_INTEGER", $integer);
$stmt->bindParam(":TYPE_DOUBLE", $double);
// The execute() function executes the prepared query.
$stmt->execute();
// Retrieving the generated id.
$id = $conn->lastInsertId();
