<?php
$file = fopen("../resources/unlink/test.txt", "w+");
fclose($file);
// The unlink() function deletes a file.
$unlink = unlink("../resources/unlink/test.txt");
$response = ($unlink) ? "Deleted successfully!" : "ERROR!";
echo $response . "<br>";

// Another example.
$dir = "../resources/unlink/img";
if(!is_dir($dir)) mkdir($dir);
foreach(scandir($dir) as $item) {
	if(!in_array($item, array(".", ".."))) {
		unlink($dir . DIRECTORY_SEPARATOR . $item);
	}
}
echo "All data was successfully deleted!";
