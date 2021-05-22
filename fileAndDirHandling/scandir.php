<?php
// The scandir() function loads a directory.
$images = scandir("../resources/scandir");

$data = array();
foreach ($images as $img) {
    // The in_array() function checks whether there is a value in an array.
	if (!in_array($img, array(".", ".."))) {
        $fileName = "resources/scandir" . DIRECTORY_SEPARATOR . $img;
		// The pathinfo() function returns the file path.
		$info = pathinfo($fileName);
		// The filesize() function returns the file size.
		$info["size"] = filesize($fileName);
		// The filemtime() function returns the date the file was last modified.
		$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
		$info["url"] = "http://localhost/php/" . str_replace("\\", "/", $fileName);

		array_push($data, $info);
	}
}
echo json_encode($data);
