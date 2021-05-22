<?php
$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
// The file_get_contents() function reads an entire file into a string.
$content = file_get_contents($link);
// The parse_url() function parses a URL and returns its components.
$parse = parse_url($link);
// The basename() function returns trailing name component of path.
$basename = basename($parse["path"]);
// Creating the file in local HD.
$path = "../resources/file_get_contents/$basename";
$file = fopen($path, "w+");
fwrite($file, $content);
fclose($file);
?>
<img src="<?=$path?>">