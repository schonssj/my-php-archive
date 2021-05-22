<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>XSS attack</title>
</head>
<body>
	<form method="post">
		<input type="text" name="search">
		<input type="submit">
	</form>
</body>
</html>

<?php
// The Cross-Site Scritping (or XSS) attack occurs when a malicious user tries to enter JS or HTML commands that can perform an action on the website and its components - such as a database.
$_POST['search'] = '<a href="#"><strong>Hi</strong></a><script>alert("Hi")</script>';

if(isset($_POST['search'])) {
	// The strip_tags() function removes all entry tags. Parameters: the entry and the tags who'll not be stripped.
	echo strip_tags($_POST['search'], "<strong>") . "<br>";
	// The htmlentities() function converts all characters to the HTML reality. Parameters: the entry.
	echo htmlentities($_POST['search']);
}
?>