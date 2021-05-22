<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File upload</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="fileUpload">
		<input type="submit">
	</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
	$file = $_FILES["fileUpload"];

	if($file["error"]) throw new Exception("Error: " . $file["error"]);

	$dirUploads = "../resources/upload";
	if(!is_dir($dirUploads)) mkdir($dirUploads);
	// The move_uploaded_file() function moves an uploaded file to a new location.
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
		echo "Uploaded successfully!";
	} else {
		throw new Exception("It was not possible to upload the file!");
	}
}
?>