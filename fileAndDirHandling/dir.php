<?php
$dir = "../resources/dir/directory";
// The is_dir() function tchecks whether a directory exists.
if (!is_dir($dir)) {
	// The mkdir() function creates a directory.
	mkdir($dir);
	echo "Directory $dir created successfully!";
} else {
	// The rmdir() function remove a directory.
	rmdir($dir);
	echo "The directory $dir already exists, but was deleted.";
}
