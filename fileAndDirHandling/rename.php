<?php
$dir1 = "../resources/rename/folder1";
$dir2 = "../resources/rename/folder2";
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$fileName = "README.txt";
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");
	fwrite($file, date("Y-m-d H:i:s"));
	fclose($file);
}
// The rename() function renames a file or directory.
$rename = rename($dir1 . DIRECTORY_SEPARATOR . $fileName, $dir2 . DIRECTORY_SEPARATOR . $fileName);
$response = ($rename) ? "File moved successfully!" : "Error!";
echo $response;
