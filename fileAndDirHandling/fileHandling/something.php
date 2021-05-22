<?php
$fileName = "j128.png";

$base64 = base64_encode(file_get_contents($fileName));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);

$mimeType = $fileInfo->file($fileName);
$base64encode = "data:" . $mimeType . ";base64," . $base64;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finfo</title>
</head>
<body>
    <a href="<?=$base64encode?>" target="_blank">Click here</a>
    <img src="<?=$base64encode?>">
</body>
</html>