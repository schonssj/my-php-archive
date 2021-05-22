<?php
// Instance of PDO object. Parameters: host, database, user, password.
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "aluno");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("UPDATE tbl SET type_string = :TYPE_STRING, type_integer = :TYPE_INTEGER, type_double = :TYPE_DOUBLE WHERE id = :ID");

$string = "Another String";
$integer = 4;
$double = 5.2;
$id = 1;
// The bindParam() function binds a variable to its corresponding reference defined on the prepare() statement.
$stmt->bindParam(":TYPE_STRING", $string);
$stmt->bindParam(":TYPE_INTEGER", $integer);
$stmt->bindParam(":TYPE_DOUBLE", $double);
$stmt->bindParam(":ID", $id);
// The execute() function executes the prepared query.
$stmt->execute();
