<?php
// Instance of PDO object. Parameters: host, database, user, password.
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "aluno");
// The beginTransaction() function initiates a transaction.
$conn->beginTransaction();
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("DELETE FROM tbl WHERE id = ?");
$id = 2;
// We can use a question mark in the query, and apply execute() with an array instead of using bindParam.
$stmt->execute(array($id));
// The rollback() function rolls back the current transaction.
$conn->rollback();
