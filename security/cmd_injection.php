<?php
if($_SERVER["REQUEST_METHOD"] === 'POST') {
	// The escapeshellarg() function escape the characters that might be used to perform a shell command.
	$cmd = escapeshellarg($_POST["cmd"]);
	var_dump($cmd);

	// The system() function execute an external program and display the output.
	$comando = system($cmd, $retorno);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Command Injection</title>
</head>
<body>
	<form method="post">
		<input type="text" name="cmd">
		<input type="submit">
	</form>
</body>
</html>