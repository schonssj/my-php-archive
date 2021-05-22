<?php
// 0 - No permission.
// 1 - Executing.
// 2 - Gravar.
// 3 - 1 & 2.
// 4 - Read.
// 5 - 1 & 4.
// 6 - 2 & 4.
// 7 - Total.

$directory = "Files";
$permissions = "0775";

if(!is_dir($directory)) mkdir($directory, $permissions);

echo "Directory $directory created successfully!";
