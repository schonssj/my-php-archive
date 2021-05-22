<?php
// Instance of PDO object. Parameters: host, database, user, password.
$conn = new PDO("mysql:host=localhost;dbname=db", "root", "aluno"); // SQLServer: $conn = new PDO("sqlsrv:Database=db;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "aluno");
// The prepare() function prepares the SQL query.
$stmt = $conn->prepare("SELECT id, type_string, type_integer, type_double FROM tbl ORDER BY id");
// The execute() function executes the prepared query.
$stmt->execute();
// The fetchAll() function returns an array containing all of the result set rows.
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Results.
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo $key . ": " . $value . "<br>";
	}
}
